<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LibraryRequest;
use App\Models\Book;

class LibraryController extends Controller
{
    public function listBooks() {
        $books = Book::all();
        return view('library', ['books' => $books]);
    }

    public function submit(LibraryRequest $request) {
        $book = new Book();
        $book->isbn = $request->input('isbn');
        $book->author = $request->input('author');
        $book->title = $request->input('title');
        $book->year = $request->input('year');
        $book->publisher = $request->input('publisher');
        $book->summary = $request->input('summary');
        $book->save();

        return redirect()->route('home')->with('success', 'Book added successfully!');
    }
}
