@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h3>Welcome to the Librarian Dashboard</h3>
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
                    <h1>Click the button for reports</h1>
                </div>
                <div class="card-body">
                    <div class="col-sm-3 float-left">
                        <a class="btn btn-primary" href="">Author report button link</a>
                    </div>
                    <div class="col-sm-3 float-left">
                        <a class="btn btn-secondary" href="{{ route('librarian.book.list') }}">Books report button link</a>
                    </div>
                    <div class="col-sm-3 float-left">
                        <a class="btn btn-info" href="{{ route('trashed-books') }}">Trashed books link</a>
                    </div>
                    <div class="col-sm-3 float-left">
                        <a class="btn btn-success" href="">Users report button link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
