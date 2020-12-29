<?php

namespace App\Http\Controllers\Catalog;

use Illuminate\Http\Request;
use Http;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('catalog.index');
    }

}
