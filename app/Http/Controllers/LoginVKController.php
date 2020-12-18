<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class LoginVKController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('vkontakte')
        ->scopes(['friends', 'offline'])
        ->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        $user = Socialite::driver('vkontakte')->user();
        $userInSystem = User::query()
            ->where('id_in_soc', $user->id)
            ->where('type_auth', 'vk')
            ->first();

        if (is_null($userInSystem)) {
            $userInSystem = new User();
            $userInSystem->fill([
                'name' => !empty($user->getName()) ? $user->getName() : '',
                'email' => !empty($user->getEmail()) ? $user->getEmail() : '',
                'password' => '',
                'id_in_soc' => !empty($user->getId()) ? $user->getId() : '',
                'type_auth' => 'vk',
                'vk_token' => $user->token,
                'email_verified_at' => now(),
                'avatar' => !empty($user->getAvatar()) ? $user->getAvatar() : '',
            ])->save();
        }

        Auth::login($userInSystem);
        return redirect()->route('home');
    }
}
