<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CongratulationController extends Controller
{
    public function index() {
        return view('congratulation');
    }
}
