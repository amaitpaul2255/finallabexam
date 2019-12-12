<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Registrationcontroller extends Controller
{

    function index()
    {
        return view('registration.index');
    }

    function insert(Request $request)
    {
        $validetedData = $request->validate([
                'name'=>'required|string',
                'username'=>'required',
                'password'=>'required|max:10',
                'contact'=>'required|string',
                'type'=>'required|string',
             ]);

        $data = array();
        $data['name'] = $request->name;
        $data['username'] = $request->username;
        $data['password'] = $request->password;
		$data['contact'] = $request->contact;
		$data['type'] = $request->type;

        $name = DB::table('users')->insert($data);
        if($name)
        {
             return redirect()->route("login");
        }
        else
        {   
             return redirect()->back();
		}
    }
}
