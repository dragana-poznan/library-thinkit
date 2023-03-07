<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //display all books in report tabel
    public function index()
    {
        $books = Book::all();
        return view('librarian.books-report', compact('books'));
    }
}
