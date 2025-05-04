<?php

use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', [HomeController::class,'index'])->name('home');
Route::resource('user', UserController::class);
