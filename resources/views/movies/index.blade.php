@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main>
    <div class="container d-flex flex-wrap mt-5">
        @foreach ($movies as $movie)
            <div class="cardFD">
                <img src="{{ $movie['image']}}" class="card-img-top imgComics" alt="imgComic">
                <div class="card-body d-flex flex-column justify-content-between align-items-center mt-2">
                    <h5 class="card-title">{{ $movie['title']}}</h5>
                    <a href="{{ route('movies.show', $movie['id'])}}" class="btn btn-danger mt-2">Details</a>
                </div>
            </div>
        @endforeach
    </div>
</main>

@endsection