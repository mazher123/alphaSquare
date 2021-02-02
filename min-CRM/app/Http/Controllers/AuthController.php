<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Login(Request $request){

        //return "am here";

        $user = User::where('email',$request->email)->where('password',$request->password)->first();

        

        if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){

            
            return "yes";
        } else{
            return "no";
        }

        


    }
}
