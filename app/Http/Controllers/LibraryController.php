<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LibraryRequest;
use App\Models\Book;
use DB;

class LibraryController extends Controller
{
    public function listBooks() {
        $books = Book::all();
        return view('library', ['books' => $books]);
    }

    public function getBook($id) {
        $book = DB::table('books')->where('id', $id)->first();
        return view('bookpage', ['book' => $book]);
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

        return redirect()->route('list-books')->with('success', 'Könyv sikeresen hozzáadva a könyvtárhoz!');
    }

    public function deleteBook($isbn) {
        DB::delete('delete from books where isbn = ?', [$isbn]);
        return redirect()->route('list-books')->with('success', 'Könyv törölve az adatbázisból!');
    }

    public function editBook($id) {
        $book = DB::table('books')->where('id', $id)->first();
        return view('editbook', ['book' => $book]);
    }

    public function submitEdit(LibraryRequest $request, $id) {
        $isbn = $request->input('isbn');
        $author = $request->input('author');
        $title = $request->input('title');
        $year = $request->input('year');
        $publisher = $request->input('publisher');
        $summary = $request->input('summary');
        DB::update('update books set isbn=?, author=?, title=?, year=?, publisher=?, summary=? where id = ?',
            [$isbn, $author, $title, $year, $publisher, $summary, $id]);
        return redirect()->route('list-books')->with('success', 'Könyv adatai sikeresen módosítva.');
    }
}
