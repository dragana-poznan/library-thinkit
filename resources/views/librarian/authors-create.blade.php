@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Author Create') }}</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Create Author</h3>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<form method="post" action="{{ url('author-save') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Author Name</label>
        <input name="name" type="text" class="form-control" id="name">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="surname">Author Surname</label>
        <input name="surname" type="text" class="form-control" id="surname">
        @error('surname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="image">Author Image</label>
        <input name="image" type="file" class="form-control" id="image">
        @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <a href="{{ route('librarian.authors') }}" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-success">Add Author</button>
    </div>
</form>
@endsection
