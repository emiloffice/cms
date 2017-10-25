<?php

namespace App\Http\Controllers\Home;

use App\Message;
use App\Post;
use App\Subscribe;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
//        $posts = Post::latest()->take(3)->get();
        return view('index');
        return view('index', compact('posts'));
        /*$rst = $this->isCN();
        if ($rst=='1'){
            return view('cn.index', compact('posts'));
        }else{

            return view('home.index', compact('posts'));
        }*/
    }

    public function fullpage()
    {
        return view('fullpage');
    }
    public function work()
    {
        return view('work');

    }
    public function ipInfo(){
        $ip = $this->getIP();
        $url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
        $info=json_decode(file_get_contents($url));
        if((string)$info->code=='1'){
            return false;
        }
        $data = (array)$info->data;
        return $data;
    }

    public function isCN()
    {
        $info = $this->ipInfo();
        if ($info['country']=='中国'){
            return '1';
        }else{
            return '0';
        }
    }
    public function home()
    {
        $posts = Post::latest()->take(3)->get();
        return view('home.index', compact('posts'));
    }
    function getIP() {
        if (getenv('HTTP_CLIENT_IP')) {
            $ip = getenv('HTTP_CLIENT_IP');
        }
        elseif (getenv('HTTP_X_FORWARDED_FOR')) {
            $ip = getenv('HTTP_X_FORWARDED_FOR');
        }
        elseif (getenv('HTTP_X_FORWARDED')) {
            $ip = getenv('HTTP_X_FORWARDED');
        }
        elseif (getenv('HTTP_FORWARDED_FOR')) {
            $ip = getenv('HTTP_FORWARDED_FOR');

        }
        elseif (getenv('HTTP_FORWARDED')) {
            $ip = getenv('HTTP_FORWARDED');
        }
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function about()
    {
        return view('about');
    }
    public function news_show()
    {
        return view('show');
    }
    public function comingsoon()
    {
        return view('home.comingsoon');
    }
    public function company()
    {
        return view('home.company');
    }

    public function ambassador(Request $request)
    {
        if($request->isMethod('post')){
            $this->validate(request(), [
                'name'=>'required',
                'email'=>'required|unique:users',
            ]);
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = '123456';
            $code = $user->referral_code = $request->code;
            if ($code!==''){
                $ambassador = DB::table('users')->where('ambassador_code',$code)->first();
                if ($ambassador){
                    $c = $user->referrals_id = $ambassador->id;
                    DB::table('users')->where('id', $c)->increment('ambassador_times');
                }else{
                    $user->referrals_id = '';
                }
            }else{
                $user->referrals_id = '';
            }

            $ambassador_code = $user->ambassador_code = $this->referralCode(1);
            $user->ambassador_times = '0';
            $user->save();
            if ($user){
                return redirect('ambassador/code/'.$ambassador_code);
            }
        }
        if($request->isMethod('get')){
            $abs = User::where([])->orderBy('ambassador_times', 'desc')->take(10)->get();
            return view('home.ambassador', compact('abs'));
        }
    }

    public function ambassadorCode($code)
    {
        session(['FROM_REFERRAL_CODE'=>$code]);
        return view('home.ambassadorCode', compact('code'));
    }
    public function ambassadorSearch(Request $request)
    {
        if ($request->isMethod('post')){
            $this->validate(request(), [
                'search'=>'required',
            ]);
            $search = $request->search;
            $user = DB::table('users')->where('name', $search)->orWhere('email', $search)->orWhere('ambassador_code', $search)->first();
        }else{
            $user = '';
        }
        return view('home.ambassadorSearch', compact('user'));
    }
    public function contact(Request $request)
    {
        if($request->isMethod('post')){
            $this->validate(request(), [
                'name'=>'required',
                'email'=>'required',
                'message'=>'required'
            ]);
            Message::create(request(['name', 'organization', 'email', 'phone', 'message']));
            return redirect('contact')->with('message', 'Success, Thank you for your message!');
        }else{
            return view('contact');
        }
    }
    public function dreamflight()
    {
        return view('home.dreamflight');
    }
    public function galactic()
    {
        return view('home.galactic');
    }
    public function jobs()
    {
        return view('home.jobs');
    }
    public function legal()
    {
        return view('home.legal');
    }
    public function game()
    {
        return view('game');
    }
    public function press()
    {
        return view('home.press');
    }

    public function privacy()
    {
        return view('home.legal.privacy');
    }
    public function publishing()
    {
        return view('home.publishing');
    }
    public function seekingdawn()
    {
        return view('home.seekingdawn');
    }
    public function team()
    {
        return view('home.team');
    }
    public function template()
    {
        return view('home.template');
    }
    public function tos()
    {
        return view('home.legal.tos');
    }
    public function values()
    {
        return view('home.values');
    }
    public function posts(Request $request)
    {
        $posts = Post::latest()->get();
        if($request->isMethod('post')){
            $this->validate(request(), [
                'param'=>'ipv4',
                'from'=>'required'
            ]);
            return json_encode($posts);
        }
        return view('home.posts', compact('posts'));
    }
    public function Show(Post $post,Request $request)
    {
        if ($request->isMethod('post')){
            return json_encode($post);
        }
        return view('home.show', compact('post'));
    }
    public function Subscribe(Request $request){
        if($request->isMethod('post')||$request->isMethod('get')){
            $this->validate(request(), [
                'email'=>'required|unique:subscribes|email',
            ]);
            Subscribe::create(request(['email']));
            if(request('callback')!==''){
                $rst['callback']=request('callback');
            }
            $rst['status'] = 'success';
            $rst['code'] = '1';
        }else{
            $rst['status'] = 'error';
            $rst['code'] = '-1';
        }
        $rst = json_encode($rst);
        return $rst;
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
    public function test()
    {
        $code = $this->referralCode(1,'');
        print_r($code);
    }

    public function seekingdawntest()
    {
        return view('home.seekingdawntest');
    }
}
