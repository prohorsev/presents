<?php

namespace App\Http\Controllers;

use App\Box;
use App\Gift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BoxController extends Controller
{
    public function index() {
        $boxGifts = Box::query()->get()->count();
        if ($boxGifts > 2) {
            return view('home')->with('boxReady', true);
        } else {
            return view('home')->with('boxReady', false);
        }
    }

    public function open() {
        $userId = Auth::id();
        $donatedGift = Box::query()->where('user_id', '=', $userId)->first()->gift_id;
        $donatedGift = Gift::query()->find($donatedGift)->name;
        $receivedGift = Box::query()->where('user_id', '<>', $userId)->inRandomOrder()->first()->gift_id;
        $receivedGift = Gift::query()->find($receivedGift)->name;
        Box::query()->delete();
        return view('open')->with([
            'received' => $receivedGift,
            'donated' => $donatedGift,
        ]);
    }
}
