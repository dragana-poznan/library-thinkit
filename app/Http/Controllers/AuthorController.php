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

    public function authors()
    {
        $authors = Author::all();
        return view('librarian.authors', compact('authors'));
    }

    public function authorCreate()
    {
        return view('librarian.authors-create');
    }

    public function authorSave(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'image' => 'nullable||image',
        ], [
            'name.required' => 'Name is required',
            'surname.required' => 'Surname is required',
        ]);

        $name = $request->name;
        $surname =  $request->surname;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . ' ' . $image->getClientOriginalName();
            $image->move(\public_path("image/"), $imageName);
        }

        $author = new Author();
        $author->name = $name;
        $author->surname = $surname;
        $author->image = $imageName;
        $author->save();

        return back()->with('success', 'Author created successfully.');
    }
}
