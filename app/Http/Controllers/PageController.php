<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('index', compact('books'));
    }

    public function detail(string $id)
    {
        $book = Book::find($id);

        return view('book-detail', compact('book'));
    }
}
