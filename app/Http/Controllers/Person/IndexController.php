<?php


namespace App\Http\Controllers\Person;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('person.index');
    }
}
