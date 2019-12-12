<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(Request $req)
    {
		$user = DB::table('users')->get();
    	if($req->session()->has('x')){
    		return view('home.index')->with('user', $user);
    	}else{
    		return redirect('/login');
    	}
	}
	
	function profile($id)
    {
        $data = DB::table('users')->where('id',$id)
                    ->get();
        
        return view('home.profile')->with('user', $data);
	}
	function delete($id)
    {
        $data = DB::table('users')->where('id',$id)
                    ->get();
        
        return view('home.delete')->with('user', $data);
	}
	
	function destroy($id)
    {
        $data = DB::table('users')->where('id',$id)
                       ->delete();
        
        if($data){
            return \Redirect::route('home.index');
        }else{
            return \Redirect::route('home.delete');
        }  
    }
}
