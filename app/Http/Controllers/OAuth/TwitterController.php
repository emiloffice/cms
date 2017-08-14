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
        if ($user->email!==''){
            $userModel->email = $user->email;
        }else{
            $userModel->email = 'null';
        }
        $userModel->avatar = $user->avatar;
        $userModel->avatar_original = $user->avatar_original;
        $userModel->oauth_token = $user->token;
        $userModel->oauth_types = 'facebook';
        $userModel->password = bcrypt('123456');
        $userModel->save();
        dd($userModel->id);
        dd($user);
    }
}
