<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', function () {
    return view('book-detail');
});

Route::get('admin', function () {
    return view('admin.index');
});

Route::get('admin/books', function () {
    return view('admin.books.index');
});

Route::get('admin/books/create', function () {
    return view('admin.books.create');
});

Route::post('admin/books/store', [BookController::class, 'store']);
