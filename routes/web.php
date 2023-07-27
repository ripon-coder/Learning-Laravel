<?php

use App\Http\Controllers\TestMailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("test-mail-send",[TestMailController::class,"sendMail"]);
Route::post("test-mail-send",[TestMailController::class,"sendNow"])->name("send-now");
