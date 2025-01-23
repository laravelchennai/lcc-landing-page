<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('coming-soon');
});


Route::get('/we', function () {
    return view('welcome');
});