<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Livewire\Livewire;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    /** @test */
    public function the_main_page_shows_correct_info()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies(),
            'https://api.themoviedb.org/3/movie/now_playing' => $this->fakeNowPlayingMovies(),
            'https://api.themoviedb.org/3/genre/movie/list' => $this->fakeGenres(),
        ]);

        $response = $this->get(route('movies.index'));

        $response->assertSuccessful();
        $response->assertSeeText('Popular Movies');
        $response->assertSee('Fake Movie');
        $response->assertSeeText('Now Playing');
        $response->assertSee('Now Playing Fake Movie');
        $response->assertSee('Animation, Fantasy, Crime');
    }

    /** @test */
    public function the_search_dropdown_works_properly()
    {
        Http::fake([
            'https://api.themoviedb.org/3/search/movie?query=jumanji' => $this->fakeSearchMovies(),
        ]);

        Livewire::test('search-dropdown')
            ->assertDontSee('jumanji')
            ->set('search', 'jumanji')
            ->assertSee('Jumanji');
    }

    public function fakePopularMovies()
    {
        return Http::response([
            'results' => [
                [
                    "popularity" => 406.677,
                    "vote_count" => 2607,
                    "video" => false,
                    "poster_path" => "/xBHvZcjRiWyobQ9kxBhO6B2dtRI.jpg",
                    "id" => 419704,
                    "adult" => false,
                    "backdrop_path" => "/5BwqwxMEjeFtdknRV792Svo0K1v.jpg",
                    "original_language" => "en",
                    "original_title" => "Fake Movie",
                    "genre_ids" => [
                        16,
                        14,
                        80,
                    ],
                    "title" => "Fake Movie",
                    "vote_average" => 6,
                    "overview" => "Fake Movie description. The near future, a time when both hope and hardships drive humanity to look to the stars and beyond. While a mysterious phenomenon menaces to destroy life on planet earth.",
                    "release_date" => "2019-09-17",
                ]
            ]
        ], 200);
    }

    public function fakeNowPlayingMovies()
    {
        return Http::response([
            'results' => [
                [
                    "popularity" => 406.677,
                    "vote_count" => 2607,
                    "video" => false,
                    "poster_path" => "/xBHvZcjRiWyobQ9kxBhO6B2dtRI.jpg",
                    "id" => 419704,
                    "adult" => false,
                    "backdrop_path" => "/5BwqwxMEjeFtdknRV792Svo0K1v.jpg",
                    "original_language" => "en",
                    "original_title" => "Now Playing Fake Movie",
                    "genre_ids" => [
                        16,
                        14,
                        80,
                    ],
                    "title" => "Now Playing Fake Movie",
                    "vote_average" => 6,
                    "overview" => "Now playing fake movie description. The near future, a time when both hope and hardships drive humanity to look to the stars and beyond. While a mysterious phenomenon menaces to destroy life on planet earth.",
                    "release_date" => "2019-09-17",
                ]
            ]
        ], 200);
    }

    public function fakeGenres()
    {
        return Http::response([
            'genres' => [
                [
                    "id" => 28,
                    "name" => "Action"
                ],
                [
                    "id" => 12,
                    "name" => "Adventure"
                ],
                [
                    "id" => 16,
                    "name" => "Animation"
                ],
                [
                    "id" => 35,
                    "name" => "Comedy"
                ],
                [
                    "id" => 80,
                    "name" => "Crime"
                ],
                [
                    "id" => 14,
                    "name" => "Fantasy"
                ],
                [
                    "id" => 27,
                    "name" => "Horror"
                ],
                [
                    "id" => 9648,
                    "name" => "Mystery"
                ],
                [
                    "id" => 10749,
                    "name" => "Romance"
                ],
                [
                    "id" => 878,
                    "name" => "Science Fiction"
                ],
                [
                    "id" => 53,
                    "name" => "Thriller"
                ],
                [
                    "id" => 10752,
                    "name" => "War"
                ],
            ]
        ], 200);
    }

    public function fakeSearchMovies()
    {
        return Http::response([
            'results' => [
                [
                    "popularity" => 406.677,
                    "vote_count" => 2607,
                    "video" => false,
                    "poster_path" => "/xBHvZcjRiWyobQ9kxBhO6B2dtRI.jpg",
                    "id" => 419704,
                    "adult" => false,
                    "backdrop_path" => "/5BwqwxMEjeFtdknRV792Svo0K1v.jpg",
                    "original_language" => "en",
                    "original_title" => "Jumanji",
                    "genre_ids" => [
                        12,
                        18,
                        9648,
                        878,
                        53,
                    ],
                    "title" => "Jumanji",
                    "vote_average" => 6,
                    "overview" => "Jumanji description. The near future, a time when both hope and hardships drive humanity to look to the stars and beyond. While a mysterious phenomenon menaces to destroy life on planet earth.",
                    "release_date" => "2019-09-17",
                ]
            ]
        ], 200);
    }
}
