@extends('layouts.app')

@section('title', 'Movies')

@section('content')
<main>
    <h1 class="text-center mt-5 fw-bold text-danger">{{ $moviesDetail->title}}</h1>
    <div class="container d-flex justify-content-center align-items-center mt-5">
            <div class="cardFDshow">
                <img src="{{ $moviesDetail->image}}" class="card-img-top imgComics" alt="imgComic">
                <div class="card-body d-flex flex-column justify-content-between align-items-center mt-5">
                    <h4 class="text-warning">Linguaggio:</h4>
                    <h2>{{ $moviesDetail->language}}</h2> 
                    <h4 class="text-warning">Data di pubblicazione:</h4>
                    <h2>{{ $moviesDetail->date}}</h2> 
                    <h4 class="text-warning">Votazione: </h4>
                    <h2>{{ $moviesDetail->vote}}</h2>
                </div>
            </div>
    </div>
</main>

@endsection