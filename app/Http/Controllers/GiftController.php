<?php

namespace App\Http\Controllers;

use App\Box;
use App\Gift;
use Illuminate\Http\Request;

class GiftController extends Controller
{
    public function index()
    {
        $gifts = Gift::query()->get()->all();
        return view('gifts')->with('gifts', $gifts);
    }

    public function addGift(Gift $gift)
    {
        Box::query()->insert(['gift_id' => $gift->id, 'user_id' => \Auth::id()]);

        return redirect()->route('home')->with(['success' => 'Подарок успешно добавлен в коробку!']);

    }
}
