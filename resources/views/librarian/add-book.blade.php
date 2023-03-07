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
                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="container">
                <form method="post" action="{{ url('save-book') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Book title</label>
                        <input name="title" type="text" class="form-control" id="title"
                            placeholder="Add the book title">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="number">Book Number</label>
                        <input name="number" type="text" class="form-control" id="number"
                            placeholder="Add the book number">
                    </div>
                    <div class="form-group">
                        <label for="author">Chose Author from Database</label>
                        <select name="author" class="form-control" id="author">
                            <option>Chose author on dropdown</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="loged-librarian">Loged Librarian</label>
                        <input name="loged-librarian" type="text" class="form-control" id="loged-librarian" value="">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-secondary">Back</button>
                        <button type="button" class="btn btn-success">Add Book</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
