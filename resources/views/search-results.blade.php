@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <h3>Search Results</h3>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="librarian-dashboard">
    <div class="container">
        <div class="card">
            <div class="card-header">
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
            </div>
            <div class="card-body">
                <form method="get" action="{{ route('search.results') }}">
                    <div class="form-group">
                        <label for="search">Search</label>
                        <input name="search" type="text" class="form-control" id="search" aria-describedby="text"
                            value="">
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Book No.</th>
                            <th scope="col">Author</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($searchRes as $book)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->description }}</td>
                                <td>{{ $book->book_no }}</td>
                                <td>{{ $book->author_id }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
