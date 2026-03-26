<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', function () {
    return view('book-detail');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/manage-book', function () {
    return view('dashboard.manage-book');
});
