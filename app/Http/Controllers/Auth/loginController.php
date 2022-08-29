<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class loginController extends Controller
{
    function login_User(Request $request){
        $request-> validate([
            'email'=>['required','max:50','min:10'],
            'password'=>['required','max:50','min:2']
        ]) ;   
        $user=User::where('email',$request->email)->first();
        if (!$user) {
            return response(['message'=>'User Not exist'],401);
        } 
        if (Hash::check($user,$request)) {
            
            return response(['message'=>'Data not Match'],401);
        }
        $token = $user->createToken('king')->plainTextToken;
        return response(['user'=>$user , 'token'=>$token],201);
                  
}
public function logout(Request $request){
    auth()->user()->tokens()->delete();
       return response(['message'=>'logout successfully'],200);
   }
}
