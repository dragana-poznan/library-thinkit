<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = Book::all();
        return view('home', compact('books'));
    }

    public function LibrarianHome()
    {
        return view('librarian.librarian-home');
    }

    //display all books in report tabel
    // public function bookList()
    // {
    //     $books = Book::all();
    //     return view('librarian.books-report', compact('books'));
    // }
}
