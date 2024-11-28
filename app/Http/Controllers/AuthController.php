<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class AuthController extends Controller{
    public function login()
    {
        return view("auth.login");
    }

    function loginPost(Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);
        $credentials =$request->only("email", "password");

        if(Auth::attempt($credentials)){
            return redirect()->intended(route("hometo"));

        }
        return redirect(route("login"))
        ->with("error", "Login Failed");
    }

    public function logout(Request $request)
    {
        Auth::logout(); 
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('status', 'Logout Succesfull');
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



