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

Route::get('produk/kos-mewah', function(){
    return view('produk');
});

Route::get('produk/kos-ekonomis', function(){
    return view('produk2');
});

Route::get('produk/kos-elite', function(){
    return view('produk2');
});

Route::get('search', function(){
    return view('search');
});

Route::get('konfirmasi', function(){
    return view('konfirmasi');
});

Route::get('konfirmasi2', function(){
    return view('konfirmasi2');
});

Route::get('admin/dashboard', function(){
    return view('dashboard');
});