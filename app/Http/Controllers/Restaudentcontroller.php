<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Restaudentcontroller extends Controller
{
    function index(Request $req)
    {
		$user = DB::table('restudentinfo')->get();
    	if($req->session()->has('x')){
    		return view('restudent.index')->with('user', $user);
    	}else{
    		return redirect('/home');
    	}
	}
}
