@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>Books page</h1>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>
</main>

@endsection