<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class registerController extends Controller
{
    function register_User(Request $request){
        
        $newUser = User::create([
            'Firstname' => $request['Firstname'],
            'Lastname' => $request['Lastname'],
            'email' => $request['email'],
            'address' => $request['address'],
            'phone_number' => $request['phone_number'],
            'password'=> Hash::make($request['password']),
        ])->save();
        return response()->json('User registered successfully');
    }
}
