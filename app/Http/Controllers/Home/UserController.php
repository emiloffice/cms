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
use Illuminate\Support\Facades\Session;
use Postmark\PostmarkClient;
use function Sodium\increment;

class UserController extends Controller
{
    public function __construct()
    {
        /*if (Auth::check()){
            redirect('user/center');
        }else {
            redirect('login');
        }*/
    }
    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password'=> $request->password])){

            return redirect('user-center');
        }
        if ($this->is_mobile_request()){
            return view('mobile.login');
        } else {
            return view('home.login');
        }
    }
    public function center()
    {
        $user = Auth::user();
        $user_id = $user->id;
        $game_id = 1;//默认为seekingdawnid
        $point = DB::table('points')->where(['user_id'=>$user_id,'game_id'=>$game_id])->first();
        if ($point->referral_code){
            $friends = Point::where('from_referral_code',$point->referral_code)
                ->join('users', 'points.user_id', '=', 'users.id')
                ->get();
        }else{
            $friends = '';
        }
        if ($this->is_mobile_request()){
            return view('mobile.uc', compact('user','point','friends'));
        } else{
            return view('home.uc', compact('user','point','friends'));
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post')){
            $this->validate($request, [
                'email' => 'required|unique:users',
                'username' => 'required|max:50',
                'password' => 'required|max:30|min:6'
            ]);
            $email = $request->email;
            $res = DB::table('users')->where('email',$email)->first();
            dd($res);
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
            if ($from_referral_id!== ''){
                Point::where('referral_code',$request->referral_code)->increment('points', 5);
            }
            $Point->referral_code = $this->referralCode(1);//生成的自己的推荐码数
            $Point->game_id = '1';//默认seekingdawn为1
            $Point->points = 0;//默认seekingdawn为1
            $Point->points_level = 1;//初始等级为1
            $Point->save();
            return redirect('confirm-email');
        }
        if ($request->isMethod('get')){
            $code = $request->code;
            if ($this->is_mobile_request()){
                return view('mobile.register', compact('code'));
            } else {
                return view('home.register', compact('code'));
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

        $user = Auth::user();
        if ($user === ''){
            $user = null;
        }
        $points = Point::where([])->orderBy('points','desc')->take(10)
            ->join('users', 'points.user_id', '=', 'users.id')
            ->get();
        if($this->is_mobile_request()){
            return view('mobile.ambassador', compact('points','user'));
        }else{
            return view('home.ambassador', compact('points','user'));
        }
    }
    public function ambassadorCode($code)
    {
        if ($code){
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
            return view('mobile.ambassador', compact('points','user','code'));
        } else{
            return view('home.ambassador', compact('points','user','code'));
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
    public function confirmEmail()
    {
        $user = session('USER_INFO');
        if($user->email!==''||$user->email!==null){
            $email = $user->email;
            return view('home.confirmEmail',compact('email'));
        }
        else {
            return view('home.confirmEmail');
        }
    }
    public function OAuthConfirmEmail()
    {
        $user = session('OAUTH_INFO');
        $token = $user->token;
        $email = $user->email;
        $res = DB::table('users')->where('oauth_token', $token)->orWhere('email', $email)->first();
        if ($res){
            Auth::attempt(['email'=>$res->email, 'password' => '123456']);
            return redirect('user-center');
        }else{
            if($user->email!==''||$user->email!==null){
                $email = $user->email;
                return view('home.OauthConfirmEmail',compact('email'));
            }
            else {
                return view('home.OauthConfirmEmail');
            }
        }

    }
    public function sendConfirmEmail(Request $request)
    {
        $client = new PostmarkClient('dd3a9434-fae6-4fe4-a67c-e3579d36c637');
        // Send an email:
        $code = $this->referralCode('1','','8');
        session(['EMAIL_CONFIRM_CODE'=>$code]);
        $sendResult = $client->sendEmail(
            "emil@multiverseinc.com",
             $request->email,
            "Multiverse Entertainment LLC",
            "Hello, This is your registration code：".$code
        );
        return json_encode($sendResult);
    }
    public function OauthVerifyUserEmail(Request $request){

        $code = session('EMAIL_CONFIRM_CODE');
        if ($code === $request->code){
            $user = session('OAUTH_INFO');
            $email = $user->email = $request->email;
            $this->createUser($user,'twitter');
            Point::where('referral_code',$request->referral_code)->increment('points', 5);
            Auth::attempt(['email' => $email, 'password' => '123456']);
            return redirect('user-center');
        }else{
            return 'error';

        }

    }
    public function defaultVerifyUserEmail(Request $request){

        $code = session('EMAIL_CONFIRM_CODE');
        if ($code === $request->code){
            $email = $request->email;
            $user = DB::table('users')->where('email',$email)->get();
            if ($user[0]!==''||$user[0]!==null){
                $user_id = $user[0]->id;
                DB::update('update points set points = ? where user_id = ?',[10, $user_id]);
                Auth::attempt(['email'=>$email, 'password'=> session('USER_PWD')]);
                return redirect('user-center');
            }
            return redirect('confirm-email');
        }else{
            return 'error';

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
}