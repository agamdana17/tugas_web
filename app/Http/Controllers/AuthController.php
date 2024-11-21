<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller{
    public function login()
    {
        return view("auth.login");
    }

    function loginPost(Request $request){


    }

    function register(){
        return view("auth.register");
    }

    function registerPost(Request $request) {
       $request->validate([
        "fullname" => "required",
        "email" => "required",
        "password" => "required"
       ]);

       $user = new User();
       $user->name = $request->fullname;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       if ($user->save()){
        return redirect(route("login"))->with("success", "User created succesfully" );
       }
       return redirect(route("register"))->with("error", "failed to created");
        
    }  
    
}



