<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Visitorhomecontroller extends Controller
{
    function index(Request $req)
    {
    		return view('visitor.index');
    }
}
