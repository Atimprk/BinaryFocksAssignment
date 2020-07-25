<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function submit(Request $request)
    {
    //print_r($request->input());
     return $request->input();
     $request->validate(["user"=>"required",
     "phone"=>"min:10",
     "password"=>"min:2 max:5",
     
     ]);
    }
}
