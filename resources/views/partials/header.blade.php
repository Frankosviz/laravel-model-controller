<nav class="navbar navbar-expand-sm navbar-light bg-black border-bottom fw-bold">
        <div class="container-fluid d-flex justify-content-around align-items-center">
            <a class="navbar-brand text-white {{Route::currentRouteName() == 'books.index' ? 'active' : ''}}" aria-current="page" href="{{route('books.index')}}">Libri</a>
            <a class="navbar-brand text-white {{Route::currentRouteName() == 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Homepage</a>
            <a class="navbar-brand text-white {{Route::currentRouteName() == 'movies.index' ? 'active' : ''}}" aria-current="page" href="{{route('movies.index')}}">Film</a>
        </div>
</nav>
