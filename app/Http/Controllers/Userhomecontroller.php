<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Userhomecontroller extends Controller
{
	function index(Request $req)
    {
		$user = DB::table('users')->get();
    	if($req->session()->has('x')){
    		return view('userhome.index')->with('user', $user);
    	}else{
    		return redirect('/login');
    	}
	}
	function uprofile($id)
    {
        $data = DB::table('users')->where('id',$id)
                    ->get();
        
        return view('userhome.uprofile')->with('user', $data);
    }
}
