<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /***
     * 
     * Display Books
     * 
     ***/

    //display all books in report tabel
    public function bookList()
    {
        $books = Book::all();
        return view('librarian.books-report', compact('books'));
    }
    /***
     * 
     * CREATE & UPDATE Books Process
     * 
     ***/

    //create books
    public function addBook()
    {
        return view('librarian.add-book');
    }

    public function saveBook(Request $request){

    }

    //update books



    /***
     * 
     * Deleting Books Process
     * 
     ***/

    //soft delete
    public function bookDelete($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('books-list')->with('success', 'Book Deleted');
    }

    //trash list
    public function onlyTrashed()
    {
        $books = Book::onlyTrashed()->get();
        return view('librarian.trashed-books', compact('books'));
    }

    //restore action
    public function restore($id)
    {
        $book = Book::onlyTrashed()->findOrFail($id);
        $book->restore();
        return redirect('books-list')->with('success', 'Book Restored');
    }
}
