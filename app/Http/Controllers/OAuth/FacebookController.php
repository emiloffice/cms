<?php

namespace App\Http\Controllers\OAuth;

use app\Http\Controllers\Home\UserController;
use App\User;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return Socialite::driver('facebook')->redirect();
    }
    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
        $userModel = new User;
        $userModel->name = $user->name;
        $userModel->email = $user->email;
        $userModel->avatar = $user->avatar;
        $userModel->avatar_original = $user->avatar_original;
        $userModel->oauth_token = $user->token;
        $userModel->oauth_types = 'facebook';
        $userModel->password = bcrypt('123456');
        $userModel->save();
        dd($userModel->id);
        dd($user);
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
}
