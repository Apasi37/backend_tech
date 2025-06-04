<?php
use App\Http\Middleware\AdminMiddleware;

use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PagesController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

Route::post('/login', [AuthController::class,'login'])->name("login");

Route::resource("/users",UsersController::class);
Route::resource("/conferences",ConferenceController::class);
Route::resource("/pages",PagesController::class);

Route::post('/admin/removeEditor',[AdminController::class,'removeEditor']);

Route::middleware('auth:api')->group(function(){
    Route::post('/logout', [AuthController::class,'logout']);
    Route::get("/profile/conferences/{id}",[ProfileController::class,"conferences"]);
    Route::post("/editorPermission",[AdminController::class,'editorPermission']);
});

Route::middleware(AdminMiddleware::class)->group(function(){
    Route::get('/admin/verify',[AdminController::class,'verify']);
    Route::get('/admin/assignedEditors/{id}',[AdminController::class,'assignedEditors']);
    Route::get('/admin/searchUsers/{name}',[AdminController::class,'searchUsers']);
    Route::post('/admin/addEditor',[AdminController::class,'addEditor']);
    
});