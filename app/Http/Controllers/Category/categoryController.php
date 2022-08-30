<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class categoryController extends Controller
{
    function save_category(Request $request){
      
            $category = new Category();
            $category-> categoryName =$request -> categoryName;
            $category-> description =$request -> description;
            $category->save();
            return response()->json(['message'=>'category saved successfully'],200);
    }
}
