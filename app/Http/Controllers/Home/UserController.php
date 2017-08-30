<?php
/**
 * Created by PhpStorm.
 * User: emil
 * Date: 2017/8/2
 * Time: 14:38
 */

namespace app\Http\Controllers\Home;

use App\Point;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Validator;
use Postmark\PostmarkClient;
use function Sodium\increment;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $HTTPS_REQUEST = env('HTTPS_REQUEST');
        if ($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'email' => 'required|exists:users,email',
                'password' => 'required|min:6|max:30'
            ]);
            if ($validator->fails()){
                return Redirect::back()->withErrors($validator)->withInput();
            }else{
                if (Auth::attempt(['email' => $request->email, 'password'=> $request->password])){
                    $user = Auth::user();
                    if($user->status=='0'){
                        session(['CONFIRM_EMAIL'=>$user->email]);
                        return redirect('confirm-email');
                    }else{
                        return redirect('user-center');
                    }
                }else{
                    $res = 'Email or password is wrong';
                    if ($this->is_mobile_request()){
                        return view('mobile.login', compact('HTTPS_REQUEST','res'));
                    } else {
                        return view('home.login', compact('HTTPS_REQUEST','res'));
                    }
                }
            }
        }else{
            if ($this->is_mobile_request()){
                return view('mobile.login', compact('HTTPS_REQUEST'));
            } else {
                return view('home.login', compact('HTTPS_REQUEST'));
            }
        }
    }
    public function center()
    {
        $HTTPS_REQUEST = env('HTTPS_REQUEST');
        $user = Auth::user();
        $user_id = $user->id;
        $game_id = 1;//默认为seekingdawnid
        $point = DB::table('points')->where(['user_id'=>$user_id,'game_id'=>$game_id])->first();
        $res = $this->ambassador_level($point->points);
        $point->level = $res['level'];
        $point->progress = $res['progress'];
        $ranks = DB::table('points')->where([])->orderBy('points','esc')->get();
        $rank = '';
        for ($i=0;$i<count($ranks);$i++) {
            if ($ranks[$i]->user_id == $user_id){
                $rank =  $i+1;
            }
        }
        if ($point->referral_code){
            $friends = Point::where('from_referral_code',$point->referral_code)
                ->join('users', 'points.user_id', '=', 'users.id')
                ->get();
        }else{
            $friends = '';
        }
        if ($this->is_mobile_request()){
            return view('mobile.uc', compact('user','point','friends','HTTPS_REQUEST', 'rank'));
        } else{
            return view('home.uc', compact('user','point','friends','HTTPS_REQUEST','rank'));
        }
    }
    public function logout()
    {
        if(Auth::check()){
            Auth::logout();
        }
        return redirect('login');
    }

    public function register(Request $request)
    {
        $HTTPS_REQUEST = env('HTTPS_REQUEST');
        if ($request->isMethod('post')){
            $validator = Validator::make($request->all(), [
                'email' => 'required|unique:users',
                'username' => 'required|max:50|min:4',
                'password' => 'required|min:6|max:30'
            ]);
            if ($validator->fails()){
                return Redirect::back()->withErrors($validator)->withInput();
            }else{
                $email = $request->email;
                $res = DB::table('users')->where('email',$email)->first();
                if($res){
                    $validator->errors()->add('email', 'The email has been registered!');
                    return Redirect::back()->withErrors($validator)->withInput();
                }else{
                    $User = new User;
                    $User->name = $request->username;
                    $User->password = bcrypt($request->password);
                    Session(['USER_PWD'=>$request->password]);
                    $User->email = $email;
                    $User->save();
                    session(['USER_INFO'=>$User]);
                    $Point = new Point;
                    $Point->user_id = $User->id;
                    $from_referral_id = Point::where('referral_code', $request->referral_code)->value('user_id');
                    $Point->from_referral_code = $request->referral_code;//提交的推荐码
                    $Point->from_referral_id = $from_referral_id;//提交的推荐人ID
                    $Point->referral_code = $this->referralCode(1);//生成的自己的推荐码数
                    $Point->game_id = '1';//默认seekingdawn为1
                    $Point->points = 0;//默认seekingdawn为1
                    $Point->points_level = 1;//初始等级为1
                    $Point->save();
                    return redirect('confirm-email');
                }
            }

        }
        if ($request->isMethod('get')){
            $code = $request->code;
            if ($this->is_mobile_request()){
                return view('mobile.register', compact('code','HTTPS_REQUEST'));
            } else {
                return view('home.register', compact('code','HTTPS_REQUEST'));
            }
        }
    }
    /*
     * @param int $no_of_codes//定义一个int类型的参数 用来确定生成多少个优惠码
     * @param array $exclude_codes_array//定义一个exclude_codes_array类型的数组
     * @param init $code_length //定义一个code_length的参数来确定优惠码的长度
     * @return array//返回数组
     * */
    public function referralCode($no_of_codes, $exclude_codes_array='', $code_length = 6)
    {
        $characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $promotion_codes = array();//这个数组用来接收生成的优惠码
        for ($j = 0; $j < $no_of_codes; $j++){
            $code = "";
            for ($i = 0; $i < $code_length; $i++){
                $code .= $characters[mt_rand(0, strlen($characters) - 1)];
            }
            //如果生成的6位随机数不在我们定义的$promotion_codes函数里
            if (!in_array($code, $promotion_codes)){
                if (is_array($exclude_codes_array)){
                    if (!in_array($code, $exclude_codes_array)){//排除已经使用的优惠码数
                        $promotion_codes[$j] = $code;//将新生成的优惠码赋值给promotion_codes数组
                    }else{
                        $j--;
                    }
                }else {
                    $promotion_codes[$j] = $code;//将优惠码赋值给数组
                }
            }else{
                $j--;
            }
        }
        if ($no_of_codes = 1){
            $promotion_codes = $promotion_codes[0];
        }
        return $promotion_codes;
    }

    public function ambassador()
    {
        $HTTPS_REQUEST = env('HTTPS_REQUEST');
        $user = Auth::user();
        if ($user === ''){
            $user = null;
        }
        $points = Point::where('status','1')->orderBy('points','desc')->take(10)
            ->join('users', 'points.user_id', '=', 'users.id')
            ->get();
        if($this->is_mobile_request()){
            return view('mobile.ambassador', compact('points','user','HTTPS_REQUEST'));
        }else{
            return view('home.ambassador', compact('points','user','HTTPS_REQUEST'));
        }
    }
    public function ambassadorCode($code)
    {
        $HTTPS_REQUEST = env('HTTPS_REQUEST');
        if ($code){
            session(['FROM_REFERRAL_CODE'=>$code]);
            $user = Auth::user();
            if ($user === ''){
                $user = null;
            }
            $points = Point::where([])->orderBy('points','desc')->take(10)
                ->join('users', 'points.user_id', '=', 'users.id')
                ->get();
            $point = Point::where('referral_code', $code)->first();
        }
        if ($this->is_mobile_request()){
            return view('mobile.ambassador', compact('points','user','code','HTTPS_REQUEST'));
        } else{
            return view('home.ambassador', compact('points','user','code','HTTPS_REQUEST'));
        }
    }
    /*
     * @param init $points
     * return int
     * */
    public function tier($param)
    {
        if ($param<100) {
            return 'Tier 1';
        } else if($param<200){
            return 'Tier 2';
        } else if($param<300){
            return 'Tier 3';
        } else if($param<400){
            return 'Tier 4';
        } else if($param<500){
            return 'Tier 5';
        } else if($param<700){
            return 'Tier 6';
        } else if($param<900){
            return 'Tier 7';
        } else{
            return 'Tier 9';
        }
    }
    /*
     * @param $params
     * @param $OAuthFrom
     * */
    public function createUser($params, $OAuthFrom)
    {
        if ($params !== '' && $OAuthFrom !== '') {
            $user = new User;
            $user->name = $params->name;
            $user->email = $params->email;
            $user->avatar = $params->avatar;
            $user->oauth_types = $OAuthFrom;
            $user->oauth_token = $params->token;
            $user->avatar_original = $params->avatar_original;
            $user->password = bcrypt('123456');
            $user->save();
            $Point = new Point;
            $Point->user_id = $user->id;
            $Point->referral_code = $this->referralCode(1);//生成的自己的推荐码数
            $Point->from_referral_code = '';
            $Point->from_referral_id = '';
            $Point->game_id = '1';//默认seekingdawn为1
            $Point->points = 10;//默认seekingdawn为1
            $Point->points_level = 1;//初始等级为1
            $Point->save();
            return $user->id;
        }else {
            return 'false';
        }
    }
    /*
     *
     * */
    public function confirmEmail(Request $request)
    {
        $HTTPS_REQUEST = env('HTTPS_REQUEST');
        $email = session('CONFIRM_EMAIL');
        if ($email){
            return view('home.confirmEmail',compact('email','HTTPS_REQUEST'));
        }else{
            $user = session('USER_INFO');
            if($user->email!==''||$user->email!==null){
                $email = $user->email;
                return view('home.confirmEmail',compact('email','HTTPS_REQUEST'));
            }
            else {
                return view('home.confirmEmail',compact('HTTPS_REQUEST'));
            }
        }
    }
    public function OAuthConfirmEmail()
    {
        $user = session('OAUTH_INFO');
        $HTTPS_REQUEST = env('HTTPS_REQUEST');
        $token = $user->token;
        $email = $user->email;
        $res = DB::table('users')->where('oauth_token', $token)->orWhere('email', $email)->first();

        if ($res){
            Auth::attempt(['email'=>$res->email, 'password' => '123456']);
            return redirect('user-center');
        }else{
            if($user->email!==''||$user->email!==null){
                $email = $user->email;
                return view('home.OauthConfirmEmail',compact('email','HTTPS_REQUEST'));
            }
            else {
                return view('home.OauthConfirmEmail', compact('HTTPS_REQUEST'));
            }
        }

    }
    public function sendConfirmEmail(Request $request)
    {
        $client = new PostmarkClient('dd3a9434-fae6-4fe4-a67c-e3579d36c637');
        // Send an email:
        $code = $this->referralCode('1','','6');
        session(['EMAIL_CONFIRM_CODE'=>$code]);
        $sendResult = $client->sendEmail(
            "emil@multiverseinc.com",
             $request->email,
            "Multiverse Entertainment LLC",
            "Hello, This is your registration code：".$code
        );
        return json_encode($sendResult);
    }
    public function OauthVerifyUserEmail(Request $request)
    {
        $HTTPS_REQUEST = env('HTTPS_REQUEST');
        $code = session('EMAIL_CONFIRM_CODE');
        $validator = Validator::make($request->all(), [
            'email' => 'required|unique:users|email',
            'code' => 'required|min:4|max:6',
        ]);
        if ($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }else{
            if ($code === $request->code){
                $user = session('OAUTH_INFO');
                $email = $user->email = $request->email;
                $this->createUser($user,'twitter');
                Point::where('referral_code',$request->referral_code)->increment('points', 10);
                Auth::attempt(['email' => $email, 'password' => '123456']);
                return redirect('user-center');
            }else{
                return Redirect::back()->withInput()->with('codeError','The Verification code you entered is incorrect ！');

            }
        }
    }
    public function defaultVerifyUserEmail(Request $request)
    {
        $HTTPS_REQUEST = env('HTTPS_REQUEST');
        $code = session('EMAIL_CONFIRM_CODE');
        $validator = Validator::make($request->all(),[
           'code' => 'required|min:4|max:6',
        ]);
        if ($validator->fails()){
            return Redirect::back()->withInput()->withErrors($validator);
        }else{
            if ($code === $request->code){
                $email = $request->email;
                $user = DB::table('users')->where('email',$email)->get();
                if ($user[0]!==''||$user[0]!==null){
                    $user_id = $user[0]->id;
                    DB::update('update points set points = ? where user_id = ?',[10, $user_id]);
                    DB::update('update users set status = ? where id = ?',[1, $user_id]);
                    if (DB::table('points')->where('referral_code', session('FROM_REFERRAL_CODE'))->first()){
                        DB::update('update points set points = points + ? where referral_code = ?',[10, session('FROM_REFERRAL_CODE')]);
                    }
                    Auth::attempt(['email'=>$email, 'password'=> session('USER_PWD')]);
                    return redirect('user-center');
                }
                return redirect('confirm-email');
            }else{
                $validator->errors()->add('code', 'The Verification code you entered is incorrect ！');
                return Redirect::back()->withInput()->withErrors($validator);
            }
        }
    }
    /*
     * Object Array $params
     * */
    public function sendWelcomeEmail($params){
        $client = new PostmarkClient("dd3a9434-fae6-4fe4-a67c-e3579d36c637");

        // Send an email:
        $sendResult = $client->sendEmailWithTemplate(
        "emil@multiverseinc.com",
         $params->to,
        2870181,
        [
            "name" => $params->name,
            "action_url" => "http://www.multiverseinc.com/confrim-user?token".$params->remeber_token,
            "login_url" => "http://www.multiverseinc.com/login",
            "username" => $params->name,
            "support_email" => "contact@multiverseinc.com",
        ]);
    }
    function is_mobile_request()
    {
        $_SERVER['ALL_HTTP'] = isset($_SERVER['ALL_HTTP']) ? $_SERVER['ALL_HTTP'] : '';
        $mobile_browser      = '0';
        if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|iphone|ipad|ipod|android|xoom)/i', strtolower($_SERVER['HTTP_USER_AGENT'])))
            $mobile_browser++;
        if ((isset($_SERVER['HTTP_ACCEPT'])) and (strpos(strtolower($_SERVER['HTTP_ACCEPT']), 'application/vnd.wap.xhtml+xml') !== false))
            $mobile_browser++;
        if (isset($_SERVER['HTTP_X_WAP_PROFILE']))
            $mobile_browser++;
        if (isset($_SERVER['HTTP_PROFILE']))
            $mobile_browser++;
        $mobile_ua     = strtolower(substr($_SERVER['HTTP_USER_AGENT'], 0, 4));
        $mobile_agents = array(
            'w3c ', 'acs-', 'alav', 'alca', 'amoi', 'audi', 'avan', 'benq', 'bird', 'blac',
            'blaz', 'brew', 'cell', 'cldc', 'cmd-', 'dang', 'doco', 'eric', 'hipt', 'inno',
            'ipaq', 'java', 'jigs', 'kddi', 'keji', 'leno', 'lg-c', 'lg-d', 'lg-g', 'lge-',
            'maui', 'maxo', 'midp', 'mits', 'mmef', 'mobi', 'mot-', 'moto', 'mwbp', 'nec-',
            'newt', 'noki', 'oper', 'palm', 'pana', 'pant', 'phil', 'play', 'port', 'prox',
            'qwap', 'sage', 'sams', 'sany', 'sch-', 'sec-', 'send', 'seri', 'sgh-', 'shar',
            'sie-', 'siem', 'smal', 'smar', 'sony', 'sph-', 'symb', 't-mo', 'teli', 'tim-',
            'tosh', 'tsm-', 'upg1', 'upsi', 'vk-v', 'voda', 'wap-', 'wapa', 'wapi', 'wapp',
            'wapr', 'webc', 'winw', 'winw', 'xda', 'xda-'
        );
        if (in_array($mobile_ua, $mobile_agents))
            $mobile_browser++;
        if (strpos(strtolower($_SERVER['ALL_HTTP']), 'operamini') !== false)
            $mobile_browser++;
        // Pre-final check to reset everything if the user is on Windows
        if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows') !== false)
            $mobile_browser = 0;
        // But WP7 is also Windows, with a slightly different characteristic
        if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows phone') !== false)
            $mobile_browser++;
        if ($mobile_browser > 0)
            return true;
        else
            return false;
    }
    // 积分进度条
    /*
     * $points
     * */
    public function ambassador_level($points){
        $res = '';
        if (0<= $points && $points < 100){
            $res['level'] = 1;
            $res['progress'] = (round(($points)/100 ,2))*100;
        } else if(100<= $points && $points < 200){
            $res['level'] = 2;
            $res['progress'] = (round(($points-100)/100 ,2))*100;
        } else if(200<= $points && $points < 300){
            $res['level'] = 3;
            $res['progress'] = (round(($points-200)/100 ,2))*100;
        } else if(300<= $points && $points < 400){
            $res['level'] = 4;
            $res['progress'] = (round(($points-300)/100 ,2))*100;
        } else if(400<= $points && $points < 500){
            $res['level'] = 5;
            $res['progress'] = (round(($points-400)/100 ,2))*100;
        } else if(500<= $points && $points < 700){
            $res['level'] = 6;
            $res['progress'] = (round(($points-500)/200 ,2))*100;
        } else if(700<= $points && $points < 800){
            $res['level'] = 7;
            $res['progress'] = (round(($points-700)/100 ,2))*100;
        } else if(800<= $points){
            $res['level'] = '8 (Ultimate Pirize)';
            $res['progress'] = '100';
        }
        return $res;

    }
}