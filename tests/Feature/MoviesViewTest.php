<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;


class MoviesViewTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_if_the_main_page_works_correctly()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies(),
            'https://api.themoviedb.org/3/movie/now_playing' => $this->fakeNowPlayingMovies(),
        ]);

        $response = $this->get(route('movies.index'));

        $response->assertSuccessful();
        $response->assertSee('Popular Movies');
        $response->assertSee('Fake Movie');
        $response->assertSee('Now Playing');
        $response->assertSee('Fake Movie 2');
        $response->assertSee('Now Playing');        
    }

    private function fakePopularMovies(){
        return Http::response([
            'results' => [
                [
                    "popularity" => 149.921,
                    "vote_count" => 2893,
                    "video" => false,
                    "poster_path" => "/mb7wQv0adK3kjOUr9n93mANHhPJ.jpg",
                    "id" => 583083,
                    "adult" => false,
                    "backdrop_path" => "/wO5QSWZPBT71gMLvrRex0bVc0V9.jpg",
                    "original_language" => "en",
                    "original_title" => "Fake Movie",
                    "genre_ids" => [
                        35,
                        10749
                    ],
                    "title" => "Fake Movie",
                    "vote_average" => 8.2,
                    "overview" => "With college decisions looming, Elle juggles her long-distance romance with Noah, changing relationship with bestie Lee and feelings for a new classmate.",
                    "release_date" => "2020-07-24",
                ]
            ]
        ], 200);
    }

    private function fakeNowPlayingMovies(){
        return Http::response([
            'results' => [
                [
                    "popularity" => 104.805,
                    "vote_count" => 354,
                    "video" => false,
                    "poster_path" => "/jHo2M1OiH9Re33jYtUQdfzPeUkx.jpg",
                    "id" => 385103,
                    "adult" => false,
                    "backdrop_path" => "/fKtYXUhX5fxMxzQfyUcQW9Shik6.jpg",
                    "original_language" => "en",
                    "original_title" => "Fake Movie 2",
                    "genre_ids" =>
                    [
                        12,
                        16,
                        35,
                        10751
                    ],
                    "title" => "Fake Movie 2",
                    "vote_average" => 7.6,
                    "overview" => "In Scooby-Doo’s greatest adventure yet, see the never-before told story of how lifelong friends Scooby and Shaggy first met and how they joined forces with youn ",
                    "release_date" => "2020-07-08",    
                ]
            ]
        ], 200);
    }
}
