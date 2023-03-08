@extends('layouts.app')

@section('content')
    @foreach ($users as $user)
        {{-- {{$user->name}} --}}
        @foreach ($user->books as $book)
            {{ $book->title }}
        @endforeach
    @endforeach
@endsection
