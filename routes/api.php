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
//     //email notice
// Route::get('/email/verify', function () { return view('auth.verify-email');})->middleware('auth')->name('verification.notice');
//      //email handler
// Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
//         $request->fulfill();
     
//         return redirect('/login');
//     })->middleware(['auth', 'signed'])->name('verification.verify');