<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/admin', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/book/{id}', [PageController::class, 'detail'])->name('book');

// Manage book routes
Route::get('/admin/books', [BookController::class, 'index'])->name('admin.books.index');
Route::get('/admin/books/create', [BookController::class, 'create'])->name('admin.books.create');
Route::post('/admin/books', [BookController::class, 'store'])->name('admin.books.store');
Route::get('/admin/books/{id}/edit', [BookController::class, 'edit'])->name('admin.books.edit');
Route::patch('/admin/books/{id}', [BookController::class, 'update'])->name('admin.books.update');
Route::delete('/admin/books/{id}', [BookController::class, 'delete'])->name('admin.books.delete');
