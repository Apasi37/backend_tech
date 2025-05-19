<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->only(['email','password']);

        if(!$token=auth('api')->attempt($credentials)){
            return response()->json(['error'=>'Unauthorized'],401);
        }

        return response()->json([
            'token'=>$token,
            'user'=>auth('api')->user()
        ]);
    }

    public function logout(){
        auth('api')->logout();

        return response()->json(['message'=>'Successfully logged out']);
    }
}
