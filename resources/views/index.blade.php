@extends('layouts.main')

@section('content')
<div>
    <div class="container px-4 pt-16 mx-auto">
        <!--start popular movies-->
        <div class="popular-movies">
            <h2 class="text-lg font-semibold tracking-wider text-yellow-500 uppercase">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres" />
                @endforeach
            </div>
        </div>
        <!--end popular movies-->

        <!--start now playing -->
        <div class="now-playing-movies py-24">
            <h2 class="text-lg font-semibold tracking-wider text-yellow-500 uppercase">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($nowPlayingMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres" />
                @endforeach
            </div>
        </div>
        <!--end now playing -->
    </div>
</div>
@endsection
