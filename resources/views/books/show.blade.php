@extends('layouts.app')

@section('title', 'Books')

@section('content')
<main>
    <h1 class="text-center mt-5 fw-bold text-danger">{{ $booksDetail->title}}</h1>
    <div class="container d-flex justify-content-center align-items-center mt-5">
            <div class="cardFDshow">
                <img src="{{ $booksDetail->cover_image}}" class="card-img-top imgComics" alt="imgComic">
                <div class="card-body d-flex flex-column justify-content-between align-items-center mt-5">
                    <h4 class="text-warning">Descrizione:</h4>
                    <p>{{ $booksDetail->plot}}</p> 
                </div>
            </div>
    </div>
</main>

@endsection