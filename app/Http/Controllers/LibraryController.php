<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LibraryRequest;
use App\Models\Book;
use DB;
use Image;

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
        if ($request->file('cover')) {
            $image = $request->file('cover');
            $fileID = uniqid();
            $filename = "/books/{$fileID}.{$image->extension()}";
            Image::make($image)->save(public_path("/uploads{$filename}"));
            $book->cover = $filename;
        }
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
        /*
        $book->update($request->all());
        return redirect()->route('edit-book')->with('success', __('Book updated successfully'));
        */
        $isbn = $request->input('isbn');
        $author = $request->input('author');
        $title = $request->input('title');
        $year = $request->input('year');
        $publisher = $request->input('publisher');
        $summary = $request->input('summary');
        DB::update('update books set isbn=?, author=?, title=?, year=?, publisher=?, summary=? where id = ?',
            [$isbn, $author, $title, $year, $publisher, $summary, $id]);
        if ($request->file('cover')) {
            $image = $request->file('cover');
            $fileID = uniqid();
            $filename = "/books/{$fileID}.{$image->extension()}";
            Image::make($image)->save(public_path("/uploads{$filename}"));
            DB::update('update books set cover=? where id = ?', [$filename, $id]);
        }
        return redirect()->route('edit-book')->with('success', 'Book updated successfully.');
        
    }
}
