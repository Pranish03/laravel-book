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

// Manage book routes
Route::get('admin/books', [BookController::class, 'index']);
Route::get('admin/books/create', [BookController::class, 'create']);
Route::post('admin/books/store', [BookController::class, 'store']);
Route::delete('admin/books/delete/{id}', [BookController::class, 'delete']);
