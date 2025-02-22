<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/multable', function () {
    return view('multale');
});
Route::get('/even', function () {
    return view('even');
});
Route::get('/prime', function () {
    return view('prime');
});
