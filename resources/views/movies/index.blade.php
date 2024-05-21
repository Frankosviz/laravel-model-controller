@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main>
    <div class="container d-flex flex-wrap gap-5 mt-5">
        @foreach ($movies as $movie)
            
            <div class="card-body">
            <p class="">{{ $movie['title']}}</p>
            <img src="{{ $movie['image']}}" class="card-img-top imgComics" alt="imgComic">
                
            </div>
        @endforeach
    </div>
</main>

@endsection