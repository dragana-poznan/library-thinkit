<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\BookUser;
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
        $authors = Author::all();
        return view('librarian.add-book', compact('authors'));
    }

    public function saveBook(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'book_no' => ['required', 'max:255', 'unique:books'],
            'author_id' => ['required']
        ], [
            'title.required' => 'Title is required',
            'book_no.required' => 'Book number is required',
            'author_id.required' => 'Author number is required',
        ]);

        $title = $request->title;
        $description =  $request->description;
        $book_no =  intval($request->book_no);
        $author_id =  intval($request->author_id);

        $book = new Book();
        $book->title = $title;
        $book->description = $description;
        $book->book_no = $book_no;
        $book->author_id = $author_id;
        $book->save();

        // $bookUser = new BookUser();
        // $bookUser->user_id = intval($request->loged_librarian);
        // $bookUser->book_id = intval($request->$book_no);
        // $bookUser->save();
     
        return redirect(route('librarian.book.list'))->with('success', 'Book created successfully.');
        // return back()->with('success', 'Book created successfully.');

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
