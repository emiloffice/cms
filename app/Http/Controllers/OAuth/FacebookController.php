<?php

namespace App\Http\Controllers\OAuth;

use app\Http\Controllers\Home\UserController;
use App\Point;
use App\User;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    protected $appId = '334111223669076';
    protected $appSecret = '06a137b4d36325336caa59d2992ba9f8';
    protected $default_graph_version = 'v2.10';
    protected $fb;
    public function __construct()
    {
        $this->fb = new Facebook([
            'app_id' => $this->appId,
            'app_secret' => $this->appSecret,
            'default_graph_version' => $this->default_graph_version,
        ]);
    }
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        if ($user = Socialite::driver('facebook')->user()){
            dd($user);
        }else{
            return Socialite::driver('facebook')->redirect();
        }
    }

    public function getShortToken()
    {
        https://graph.facebook.com/oauth/client_code?access_token=...&client_secret=...&redirect_uri=...&client_id=...
    }
    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback(Request $request)
    {
        if($user = Socialite::driver('facebook')->user()){
            $res = DB::table('users')->where('oauth_token', $user->token)->orWhere('email', $user->email)->first();
            if ($res) {
                DB::table('users')
                    ->where('id', $res->id)
                    ->update(['oauth_token' => $user->token]);
                Auth::attempt(['email'=>$user->email, 'password'=>'123456']);
                return redirect('user-center');
            }else{
                $userModel = new User;
                $userModel->name = $user->name;
                $userModel->email = $user->email;
                $userModel->avatar = $user->avatar;
                $userModel->avatar_original = $user->avatar_original;
                $userModel->oauth_token = $user->token;
                $userModel->oauth_types = 'facebook';
                $userModel->status = '1';
                $userModel->password = bcrypt('123456');
                $userModel->save();
                $point = new Point;
                $point->user_id = $userModel->id;
                $point->game_id = '1';
                $point->referral_code = $this->referralCode(1);
                $from_referral_code = session('FROM_REFERRAL_CODE');
                $from_referral_id = '';
                if ($from_referral_code){
                    $p = DB::table('points')->where('referral_code', $from_referral_code)->first();
                    if ($p){
                        $from_referral_id = $p->user_id;
                        DB::update('update points set points = points + ? where referral_code = ?',[10, session('FROM_REFERRAL_CODE')]);
                    }
                }
                $point->from_referral_id = $from_referral_id;
                $point->from_referral_code = $from_referral_code;
                $point->points = 10;
                $point->points_level = '1';
                $point->save();
                Auth::attempt(['email'=>$user->email, 'password'=>'123456']);
                return redirect('user-center');
            }
        }else{
            return redirect('login');
        }


    }
    public function login()
    {
        $fb = new Facebook([
            'app_id' => $this->appId,
            'app_secret' => $this->appSecret,
            'default_graph_version' => $this->default_graph_version,
        ]);

        $helper = $fb->getCanvasHelper();

        try {
            $accessToken = $helper->getAccessToken();
        } catch(FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        if (! isset($accessToken)) {
            echo 'No OAuth data could be obtained from the signed request. User has not authorized your app yet.';
            exit;
        }
        echo '<h3>Signed Request</h3>';
        var_dump($helper->getSignedRequest());

        echo '<h3>Access Token</h3>';
        var_dump($accessToken->getValue());
    }

    public function callback()
    {
        $helper = $this->fb->getRedirectLoginHelper();

        try {
            $accessToken = $helper->getAccessToken();
        } catch(FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        if (! isset($accessToken)) {
            if ($helper->getError()) {
                header('HTTP/1.0 401 Unauthorized');
                echo "Error: " . $helper->getError() . "\n";
                echo "Error Code: " . $helper->getErrorCode() . "\n";
                echo "Error Reason: " . $helper->getErrorReason() . "\n";
                echo "Error Description: " . $helper->getErrorDescription() . "\n";
            } else {
                header('HTTP/1.0 400 Bad Request');
                echo 'Bad request';
            }
            exit;
        }

    // Logged in
            echo '<h3>Access Token</h3>';
            var_dump($accessToken->getValue());

    // The OAuth 2.0 client handler helps us manage access tokens
            $oAuth2Client = $this->fb->getOAuth2Client();

    // Get the access token metadata from /debug_token
            $tokenMetadata = $oAuth2Client->debugToken($accessToken);
            echo '<h3>Metadata</h3>';
            var_dump($tokenMetadata);

    // Validation (these will throw FacebookSDKException's when they fail)
            $tokenMetadata->validateAppId($this->appId); // Replace {app-id} with your app id
    // If you know the user ID this access token belongs to, you can validate it here
    //$tokenMetadata->validateUserId('123');
    $tokenMetadata->validateExpiration();

    if (! $accessToken->isLongLived()) {
        // Exchanges a short-lived access token for a long-lived one
        try {
            $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
        } catch (FacebookSDKException $e) {
            echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
            exit;
        }

        echo '<h3>Long-lived</h3>';
        var_dump($accessToken->getValue());
    }

    $_SESSION['fb_access_token'] = (string) $accessToken;

    // User is logged in with a long-lived access token.
    // You can redirect them to a members-only page.
    //header('Location: https://example.com/members.php');
    }

    public function authInfo()
    {
        return 'auth-info';
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

    public function cancel_auth()
    {
        return redirect('login');
    }
}
