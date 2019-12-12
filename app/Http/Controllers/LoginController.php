<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function verify(Request $req)
    {
        $validetedData = $req->validate([
            'name'=>'required|string',
            'password'=>'required|max:10',
         ]);

        $user = DB::table('users')->where('username',$req->name)
                ->where('password',$req->password)
                ->first();
         $req->session()->put('x',$user);
        if($user != null)
        {
            if($user->type == "admin")
            {
                $req->session()->put('x',$req->name);
                return \Redirect::route('home.index');
                //dd($user);
            }
            if($user->type == "user")
            {
                $req->session()->put('x',$req->name);
                //return view('userhome.index');
                return \Redirect::route('userhome.index');
            }
        }
        else{
            return \Redirect::route('visitor.index');
        }
    }
}
