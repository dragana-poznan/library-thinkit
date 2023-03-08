@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Books Report') }}</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Add a Book</h3>
                    {{ Auth::user()->name }} {{ Auth::user()->surname }}
                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="container">
                <div class="pb-8">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <p>Something went wrong...</p>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <form method="post" action="{{ route('librarian.book.save') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Book title</label>
                        <input name="title" type="text" class="form-control" id="title"
                            placeholder="Add the book title">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="book_no">Book Number</label>
                        <input name="book_no" type="text" class="form-control" id="book_no"
                            placeholder="Add the book number">
                        @error('book_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="author_id">Chose Author from Database</label>
                        <select name="author_id" class="form-control" id="author_id">
                            <option>Chose author on dropdown</option>
                            @foreach($authors as $author)
                                <option value="{{ $author->id }}">
                                    {{ $author->name }}

                                    {{ $author->surname }}
                                </option>
                            @endforeach
                        </select>
                        @error('author_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div hidden class="form-group">
                        <label for="loged_librarian">Loged Librarian</label>
                        <input name="loged_librarian" type="text" class="form-control" id="loged_librarian"
                            value="{{ Auth::user()->id }}">
                    </div>
                    <div class="form-group">
                        <a href="{{ route('librarian.book.list') }}"
                            class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-success">Add Book</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
