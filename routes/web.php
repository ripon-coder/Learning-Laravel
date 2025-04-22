<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $string =  strstr("ripon@hotmail.com","@");
    $st_length = strlen("@gmail.");
    return substr($string,-3,3);
    $new_array = User::select('name', 'email')->get()
        ->filter(fn($user) => str_ends_with($user->email, "@gmail.com"))
        ->map(fn($user) =>
        [
            "name" => $user->name,
            "email" => $user->email . " - verified"
        ])
        ->values()
        ->toArray();

    return $new_array;


    // $numbers = [1, 2, 3, 4, 5, 6];

    // $evenSquares = array_map(function($number) {
    //     return $number * $number;
    // }, array_filter($numbers, function($number) {
    //     return $number % 2 === 0;
    // }));

    // return $evenSquares;
});
