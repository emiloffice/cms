<?php

namespace App\Http\Controllers\OAuth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class TwitterController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }
    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('twitter')->user();
        $userModel = new User;
        $userModel->name = $user->name;
        if ($user->email!==''||$user->email!=='null'){
            $userModel->email = $user->email;
            $userModel->avatar = $user->avatar;
            $userModel->avatar_original = $user->avatar_original;
            $userModel->oauth_token = $user->token;
            $userModel->oauth_types = 'facebook';
            $userModel->password = bcrypt('123456');
            print_r($userModel->email);
            print_r('has string');
//            $userModel->save();
            redirect('user-center');
        }else{
            $userModel->email = 'test@multiverseinc.com';
            $userModel->avatar = $user->avatar;
            $userModel->avatar_original = $user->avatar_original;
            $userModel->oauth_token = $user->token;
            $userModel->oauth_types = 'facebook';
            $userModel->password = bcrypt('123456');
            print_r($userModel->email);
            print_r('has string');
//            $userModel->save();
            redirect('confirm-email');
        }

    }
}
