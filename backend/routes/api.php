<?php
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PagesController;

use App\Http\Controllers\ProfileController;


Route::post('/login', [AuthController::class,'login'])->name("login");
Route::post('/logout', [AuthController::class,'logout'])->middleware('auth:api');

Route::get("/profile/conferences/{id}",[ProfileController::class,"conferences"]);

Route::resource("/users",UsersController::class);
Route::resource("/conferences",ConferenceController::class);
Route::resource("/pages",PagesController::class);

Route::middleware(AdminMiddleware::class)->group(function(){
    Route::get('/admin/verify',[AdminController::class,'verify']);
    
    Route::get('/admin/dashboard',function(){
        return response()->json(['message'=>'Welcome admin!']);
    });
});

Route::middleware(['auth:api','editor'])->group(function(){
    Route::get('/editor/dashboard',function(){
        return response()->json(['message'=>'Welcome editor!']);
    });
});