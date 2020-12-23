<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

use App\Gift;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()

    {
        $user = Auth::user();
        $gifts = Gift::query()->get()->all();
        return view('profile', ['user' => $user])->with('gifts', $gifts);

    }

    public function create(Request $request) {



            $request->flash();


            return redirect()->route('profile')->with('success', 'Изменения сохранены');
        }



};
