<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('login', function() {
    return view('login');
});

Route::get('profile', function() {
    return view('profile');
});

Route::get('register', function(){
    return view('register');
});

Route::get('produk', function(){
    return view('produk');
});

Route::get('search', function(){
    return view('search');
});
