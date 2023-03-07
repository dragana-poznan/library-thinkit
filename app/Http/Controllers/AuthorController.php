<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    //display all authors in report tabel
    public function index(){
        $author = Author::all();
        return view('librarian.librarian-home', compact('author'));
    }
}
