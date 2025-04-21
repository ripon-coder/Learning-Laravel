<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    //$my_array = [100, 2, 3, 4, "", "Ripon"];
    $my_array = ["karim", "rahim", 3, 4, "", "Ripon"];
    $gm = ["ripon@hotmail.com", "karim@gmail.com"];

    $new_array = array_map(
        fn($value) => $value . " - verified",
        array_filter($gm, fn($value) => str_ends_with($value, "@gmail.com"))
    );
    return $new_array;


    // $numbers = [1, 2, 3, 4, 5, 6];

    // $evenSquares = array_map(function($number) {
    //     return $number * $number;
    // }, array_filter($numbers, function($number) {
    //     return $number % 2 === 0;
    // }));

    // return $evenSquares;
});
