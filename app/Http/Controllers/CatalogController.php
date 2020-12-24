<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class CatalogController extends Controller
{
    public function index()
    {
        return view('catalog');
    }

}
