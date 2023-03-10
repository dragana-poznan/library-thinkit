<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;

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

    public function searcResults(Request $request)
    {
        // dd($request->search);
        $search = $request->search;
        $searchRes = Book::where('title', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orWhere('book_no', 'LIKE', "%{$search}%")
            ->orWhere('author_id', 'LIKE', "%{$search}%")
            ->get();
        // return $searchRes;
        return view('search-results', compact('searchRes'));
    }

    public function LibrarianHome()
    {
        return view('librarian.librarian-home');
    }

    public function testPivot()
    {
        $users = User::all();
        return view('librarian.test', compact('users'));
    }
}
