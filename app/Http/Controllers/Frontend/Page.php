<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page extends Controller
{
    function home__Page(){
    	return view('layout');
    }
}
