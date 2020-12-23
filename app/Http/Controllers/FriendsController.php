<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class FriendsController extends Controller
{
    public function index()
    {

        $response = Http::get('https://api.vk.com/method/friends.get', [
            'access_token' => \Auth::user()->vk_token,
            'v' => 5.126,
            'fields' => 'nickname,photo_100',
            ]);
        $friends = $response['response']['items'];
        return view('friends', [
           'friends' => $friends
        ]);
    }

}
