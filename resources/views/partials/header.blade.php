<nav class="navbar navbar-expand-sm navbar-light bg-black border-bottom" id="navbar">
        <div class="container-fluid d-flex justify-content-around align-items-center">
            <a class="navbar-brand text-white {{Route::currentRouteName() == 'books' ? 'active' : ''}}" aria-current="page" href="{{route('books')}}">Libri</a>
            <a class="navbar-brand text-white {{Route::currentRouteName() == 'home' ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Homepage</a>
            <a class="navbar-brand text-white {{Route::currentRouteName() == 'movies' ? 'active' : ''}}" aria-current="page" href="{{route('movies')}}">Film</a>
        </div>
</nav>
