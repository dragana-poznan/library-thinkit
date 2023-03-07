@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Books Report') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h3>Books report with actions</h3>
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="librarian-dashboard">
        <div class="container">
            <div class="card">
                <div class="add-book-button btn btn-success">
                    <a href="{{url('add-book')}}">Add Book</a>
                </div>
                <div class="card-header">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Book No.</th>
                                <th scope="col">Author</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($books as $book)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->description }}</td>
                                    <td>{{ $book->book_no }}</td>
                                    <td>{{ $book->author_id }}</td>
                                    <td>
                                        <a class="btn btn-danger" href="{{ url('books-delete/' . $book->id) }}">Delete</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-warning" href="">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
