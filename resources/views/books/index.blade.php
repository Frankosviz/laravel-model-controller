@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main>
    <div class="container d-flex flex-wrap mt-5">
        @foreach ($books as $book)
            <div class="cardFD">
                <img src="{{ $book['cover_image']}}" class="card-img-top imgComics" alt="imgComic">
                <div class="card-body d-flex flex-column justify-content-between align-items-center mt-2">
                    <h5 class="card-title">{{ $book['title']}}</h5>
                    <a href="{{ route('books.show', $book['id'])}}" class="btn btn-danger mt-2">Details</a>
                </div>
            </div>
        @endforeach
    </div>
</main>

@endsection