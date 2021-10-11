<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class TvViewModel extends ViewModel
{
    public $popularTv;
    public $topRatedTv;
    public $genres;

    public function __construct($popularTv, $topRatedTv, $genres)
    {
        $this->popularTv = $popularTv;
        $this->topRatedTv = $topRatedTv;
        $this->genres = $genres;
    }

    public function popularTv()
    {
        return $this->formatMovies($this->popularTv);
    }

    public function topRatedTv()
    {
        return $this->formatMovies($this->topRatedTv);
    }

    public function genres()
    {
        return  collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }

    private function formatMovies($tv)
    {
        return collect($tv)->map(function ($tvShow) {
            $genresFormatted = collect($tvShow['genre_ids'])->mapWithKeys(function ($value) {
                return [$value => $this->genres()->get($value)];
            })->implode(', ');
            return collect($tvShow)->merge(
                [
                    'poster_path' => 'https://image.tmdb.org/t/p/w500/' . $tvShow['poster_path'],
                    'vote_average' => $tvShow['vote_average'] * 10 . '%',
                    'first_air_date' => Carbon::parse($tvShow['first_air_date'])->format('M d, Y'),
                    'genres' => $genresFormatted,
                ]
            )->only([
                'id', 'name', 'poster_path', 'vote_average', 'first_air_date', 'overview', 'genre_ids', 'genres'
            ]);
        });
    }
}
