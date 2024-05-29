<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/umroh', function(){
    return view('umroh');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/detail', function(){
    return view('detail');
});
