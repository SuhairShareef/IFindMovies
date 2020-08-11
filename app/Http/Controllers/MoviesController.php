<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\ViewModels\MoviesViewModel;


class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Sending a request for popular movies section 
        $popularMovies = Http::withToken(config('services.moviesAPI.token'))->get(config('services.moviesAPI.baseURL').'movie/popular')->json()['results'];

        // Sending a request for genres
        $genres = Http::withToken(config('services.moviesAPI.token'))->get(config('services.moviesAPI.baseURL').'genre/movie/list')->json()['genres'];

        // Sending a request for now playing movies section 
        $nowPlayingMovies = Http::withToken(config('services.moviesAPI.token'))->get(config('services.moviesAPI.baseURL').'movie/now_playing')->json()['results'];

        $viewModel = new MoviesViewModel($popularMovies, $nowPlayingMovies, $genres);

        return view('index', $viewModel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
//
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Sending a request for popular movies section 
        $movie = Http::withToken(config('services.moviesAPI.token'))->get(config('services.moviesAPI.baseURL').'movie/'.$id.'?append_to_response=credits,videos,images')->json();

        // dump ($movie);
        return view('show', [
            'movie' => $movie,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
