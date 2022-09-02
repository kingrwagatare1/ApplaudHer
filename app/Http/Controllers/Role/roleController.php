<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class roleController extends Controller
{
   public function index()
      {
      
    $rol=Role::all();
    $data = [
        "message" => "list of roles",
        "roles"=> $rol,
    ];
    return $this->successResponse($data,200);
}
}
