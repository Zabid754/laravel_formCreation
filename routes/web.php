<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\usercontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::view('user-form','userform');
Route::post('adduser',[usercontroller::class,'addUser']);
Route::view('about','about');
Route::view('about/{name}','about');