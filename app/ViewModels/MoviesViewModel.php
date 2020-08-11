<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;

class MoviesViewModel extends ViewModel
{
    public $popularMovies;
    public $nowPlayingMovies;
    public $genres;

    public function __construct($popularMovies, $nowPlayingMovies, $genres)
    {
        $this->popularMovies = $popularMovies;
        $this->nowPlayingMovies = $nowPlayingMovies;
        $this->genres = $genres;
    }

    public function popularMovies()
    {
        return $this->movieInfo($this->popularMovies);
    }

    public function nowPlayingMovies()
    {
        return $this->movieInfo($this->nowPlayingMovies);
    }

    public function genres()
    {
        // Mapping genres array
        return collect($this->genres)->mapWithKeys(function ($genre) {
            return [$genre['id'] => $genre['name']];
        });
    }   
    
    private function movieInfo($movies)
    {
        // @foreach ($movie['genre_ids'] as $genre){{ $genres->get($genre) }}@if (!$loop->last),@endif@endforeach
        
        return collect($movies)->map(function ($movie)
        {
            $genresEdited = collect($movie['genre_ids'])->mapWithKeys(function($value){
                return [$value => $this->genres()->get($value)];
            })->implode(', ');
            
            return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'],
                'vote_average' => floatval($movie['vote_average']) * 10 .'%',
                'release_date' => Carbon::parse($movie['release_date'])->format('M d, Y'),
                'genres' => $genresEdited,
            ])->only([
                'poster_path', 'vote_average', 'release_date', 'genres', 'title', 'original_title', 'overview', 'id', 'genre_ids'
                ]);
        });
    }

}
