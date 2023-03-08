@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Authors Report') }}</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Authors report with actions</h3>
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
                <a href="{{ url('author-create') }}">Add Author</a>
            </div>
            <div class="card-header">
                @if(Session::has('success'))
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
                            <th scope="col">Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Image</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach($authors as $author)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $author->name }}</td>
                                <td>{{ $author->surname }}</td>
                                <td>{{ $author->image }}</td>
                                <td>
                                    <a class="btn btn-danger"
                                        href="">Delete</a>
                                </td>
                                <td>
                                    <a class="btn btn-warning"
                                        href="">Edit</a>
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
