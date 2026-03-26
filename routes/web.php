<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);
Route::get('/book/{id}', [PageController::class, 'detail']);

Route::get('admin', function () {
    return view('admin.index');
});

// Manage book routes
Route::get('admin/books', [BookController::class, 'index']);
Route::get('admin/books/create', [BookController::class, 'create']);
Route::post('admin/books/store', [BookController::class, 'store']);
Route::delete('admin/books/delete/{id}', [BookController::class, 'delete']);
