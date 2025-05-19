<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;

Route::resource("/users",UsersController::class);

Route::post('/login', [AuthController::class,'login']);
Route::post('/logout', [AuthController::class,'logout'])->middleware('auth:api');

Route::middleware(['auth:api'.'admin'])->group(function(){
    Route::get('/admin/dashboard',function(){
        return response()->json(['message'=>'Welcome admin!']);
    });
});

Route::middleware(['auth:api'.'redactor'])->group(function(){
    Route::get('/redactor/dashboard',function(){
        return response()->json(['message'=>'Welcome redactor!']);
    });
});