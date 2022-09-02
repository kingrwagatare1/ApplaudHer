<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class projectController extends Controller
{
    function save_project(Request $request){
      
        $project = new Project();
        $project-> projectName =$request -> projectName;
        $project-> categoryId =$request -> categoryId;
        $project-> details =$request -> details;
        $project-> participantId =$request -> participantId;
        $project-> budget =$request -> budget;
        $project->save();
        return response()->json(['message'=>'project saved successfully'],200);
}

public function index(){
    $projects = Project::all();
    return response()->json(['projects'=>$projects], 200);
  } 
  public function show(Request $request, $id){
    $projects = Project::find($id);
    if($projects){
        return response()->json(['Projects'=>$projects], 200);
    }else{
        return response()->json(['message'=>'Record not found'], 404);
    }
    
  } 
  public function update(Request $request, $id){
    $projec = Project::find($id);
    if($projec){
        $projec->update($request->all());
        return response()->json(['message'=>'updated Successfully'], 404);
    }else{
        return response()->json(['message'=>'Record not found'], 404);
    }
    
  } 

    public function delete(Request $request, $id)
    {
        $projec= Project::find($id);
        if($projec){
            $projec->delete();
            return response()->json(['message'=>'Records  deleted'], 404); 
        }else{
            return response()->json(['message'=>'Records  not found'], 404);    
        }
    }
}
