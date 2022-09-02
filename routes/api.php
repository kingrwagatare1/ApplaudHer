<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::POST('save_category',[\App\Http\Controllers\Category\categoryController::class,'save_category']);
Route::POST('register_cooperative',[\App\Http\Controllers\Cooperative\cooperativeController::class,'register_cooperative']);
Route::POST('register_User',[\App\Http\Controllers\Auth\registerController::class,'register_User']);
Route::POST('login_User',[\App\Http\Controllers\Auth\loginController::class,'login_User']);
Route::middleware('auth:sanctum')->post('logout',[\App\Http\Controllers\Auth\loginController::class,'logout']);
Route::POST('register_role',[\App\Http\Controllers\Role\roleController::class,'register_role']);
      //CRUD For Projects
Route::POST('save_project',[\App\Http\Controllers\Project\projectController::class,'save_project']);
Route::GET('/save_project',[\App\Http\Controllers\Project\projectController::class,'index']);
Route::get('/save_project/{id}', [\App\Http\Controllers\Project\projectController::class,'show']);
Route::PATCH('/save_project/{id}',[\App\Http\Controllers\Project\projectController::class,'update']);
Route::delete('/save_project/{id}',[\App\Http\Controllers\Project\projectController::class,'delete']);

    //CRUD For Participants
Route::POST('save_participant',[\App\Http\Controllers\Paticipant\participantController::class,'save_participant']);
Route::GET('/save_participant',[\App\Http\Controllers\Paticipant\participantController::class,'index']);
Route::get('/save_participant/{id}', [\App\Http\Controllers\Paticipant\participantController::class,'show']);
Route::PATCH('/save_participant/{id}',[\App\Http\Controllers\Paticipant\participantController::class,'update']);
Route::delete('/save_participant/{id}',[\App\Http\Controllers\Paticipant\participantController::class,'delete']);
