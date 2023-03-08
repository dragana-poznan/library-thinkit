<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search-results', [App\Http\Controllers\HomeController::class, 'searcResults'])->name('search.results');

//NAPRAVI GRUPE RUTA ZA LIBRARIANA I ZA READERA
//librarian rotes
Route::get('/librarian/home', [App\Http\Controllers\HomeController::class, 'LibrarianHome'])->name('home.librarian')->middleware('is_librarian');

//librarian cruds of books
Route::get('/books-list', [BookController::class, 'bookList'])->name('librarian.book.list');
Route::get('/add-book', [BookController::class, 'addBook'])->name('librarian.book.add');
Route::post('/save-book', [BookController::class, 'saveBook'])->name('librarian.book.save');
Route::get('/books-delete/{id}', [BookController::class, 'bookDelete']);
Route::get('/trashed-books', [BookController::class, 'onlyTrashed'])->name('trashed-books');
Route::get('/books-restore/{id}', [BookController::class, 'restore'])->name('restored-books');

//librarian cruds of authors

