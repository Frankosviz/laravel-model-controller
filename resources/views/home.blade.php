@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <div class="container">
                <h1 class="text-center text-danger my-5">Welcome to my Library</h1>
                <div class="d-flex justify-content-around align-items-center">
                <div>
                    <a href="{{ route('books.index') }}" class="btn btn-warning">Let's discover our books!</a>
                </div>
                <div>
                    <a href="{{ route('movies.index') }}" class="btn btn-warning">Search a new film easly</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection