@extends('layouts.main')

@section('content')
<div>
    <div class="container px-4 pt-16 mx-auto">
        <!--start popular tv shows-->
        <div class="popular-tv-shows">
            <h2 class="text-lg font-semibold tracking-wider text-yellow-500 uppercase">Popular Tv Shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach($popularTv as $tvShow)
                <x-tv-card :tvShow="$tvShow" />
                @endforeach

            </div>
        </div>
        <!--end popular tv-shows -->

        <!--top-rated tv shows -->
        <div class="top-rated-tv-shows  py-24">
            <h2 class="text-lg font-semibold tracking-wider text-yellow-500 uppercase">Top Rated</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach($topRatedTv as $tvShow)
                <x-tv-card :tvShow="$tvShow" />
                @endforeach

            </div>
        </div>
        <!--end top-rated tv shows -->
    </div>
</div>
@endsection
