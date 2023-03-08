<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

use function PHPUnit\Framework\returnSelf;

class AuthorController extends Controller
{
    //display all authors in report tabel
    public function index()
    {
        $author = Author::all();
        return view('librarian.librarian-home', compact('author'));
    }

    public function addAuthor(Request $request)
    {
        $author = new Author();
        $author->name = $request->name;
        $author->surname = $request->surname;
        $author->image = $request->image;

        $author->save();

        return 'Author added';
    }


}
