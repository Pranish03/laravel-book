<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
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
        return redirect("/admin/books");
    }
}
