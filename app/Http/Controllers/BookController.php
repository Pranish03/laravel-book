<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        return view('admin.books.create');
    }

    public function store(Request $request)
    {
        $book = new Book();

        $book->title = $request->title;
        $book->author = $request->author;
        $book->price = $request->price;
        $book->description = $request->description;
        $book->isbn = $request->isbn;
        $book->published_on = $request->published_on;
        $book->published_by = $request->published_by;
        $book->pages = $request->pages;

        $file = $request->image;

        if ($file) {
            $file_name = time() . "_" . rand() . "." . $file->getClientOriginalExtension();
            $file->move("images/", $file_name);
            $book->img_url = "images/{$file_name}";
        }

        $book->save();

        toast('Book created successfully!', 'success');
        return redirect()->route('admin.books.index');
    }

    public function edit(string $id)
    {
        $book = Book::find($id);

        return view('admin.books.edit', compact('book'));
    }

    public function update(Request $request, string $id)
    {
        $book = Book::find($id);

        $book->title = $request->title;
        $book->author = $request->author;
        $book->price = $request->price;
        $book->description = $request->description;
        $book->isbn = $request->isbn;
        $book->published_on = $request->published_on;
        $book->published_by = $request->published_by;
        $book->pages = $request->pages;

        $file = $request->image;

        if ($file) {
            if ($book->img_url && file_exists(public_path($book->img_url))) {
                unlink(public_path($book->img_url));
            }

            $file_name = time() . "_" . rand() . "." . $file->getClientOriginalExtension();
            $file->move("images/", $file_name);
            $book->img_url = "images/{$file_name}";
        }

        $book->save();

        toast('Book updated successfully!', 'success');
        return redirect()->route('admin.books.index');
    }

    public function delete(string $id)
    {
        $book = Book::find($id);

        if ($book->img_url && file_exists(public_path($book->img_url))) {
            unlink(public_path($book->img_url));
        }

        $book->delete();

        toast('Book deleted successfully!', 'success');
        return redirect()->route('admin.books.index');
    }
}
