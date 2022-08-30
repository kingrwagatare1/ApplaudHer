<?php

namespace App\Http\Controllers\Cooperative;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cooperative;

class cooperativeController extends Controller
{
    function register_cooperative(Request $request){
      
        $coopera = new Cooperative();
        $coopera-> cooperativeName =$request -> cooperativeName;
        $coopera-> workPermit =$request -> workPermit;
        $coopera->save();
        return response()->json(['message'=>'Cooperative registered successfully'],200);
}
}
