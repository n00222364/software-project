<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beaches', function(){
    return view('beaches');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/form', function(){
    return view('form');
});
