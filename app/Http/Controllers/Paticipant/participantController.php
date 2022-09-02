<?php

namespace App\Http\Controllers\Paticipant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Participant;

class participantController extends Controller
{
    function save_participant(Request $request){
      
        $participan = new Participant();
        $participan-> user_Id =$request -> user_Id;
        $participan-> cooperative_id =$request -> cooperative_id;
        $participan-> description =$request -> description;
        $participan->save();
        return response()->json(['message'=>'participant saved successfully'],200);
}
    public function index(){
    $part = Participant::all();
    return response()->json(['participants'=>$part], 200);
  } 
  public function show(Request $request, $id){
    $participants = Participant::find($id);
    if($participants){
        return response()->json(['participants'=>$participants], 200);
    }else{
        return response()->json(['message'=>'Record not found'], 404);
    }
    
  } 
  public function update(Request $request, $id){
    $participants = Participant::find($id);
    if($participants){
        $participants->update($request->all());
        return response()->json(['message'=>'updated Successfully'], 404);
    }else{
        return response()->json(['message'=>'Record not found'], 404);
    }
    
  } 

    public function delete(Request $request, $id)
    {
        $participants= Participant::find($id);
        if($participants){
            $participants->delete();
            return response()->json(['message'=>'Records  deleted'], 404); 
        }else{
            return response()->json(['message'=>'Records  not found'], 404);    
        }
    }

}
