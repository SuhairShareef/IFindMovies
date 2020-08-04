@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <!-- Popular Movies Section -->
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Popular Movies
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-12 mb-4">
                @for ($i = 0; $i < 8; $i++)
                    <div class="mt-8">
                        <a href="/movie">
                            <img src="/img/parasite.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="Parasite">
                        </a>
                        <div class="mt-2">
                            <a href="/movie" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <span><svg class="fill-current w-4 h-4 text-orange-500" xmlns="http://www.w3.org/2000/svg" id="color" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512"><path d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107"/></svg></span>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Aug 2, 1999</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        <br><br>
        <hr class="opacity-25">
        <br><br>

        <!-- Now Playing Movies Section -->
        <div class="now-playing mb-20">
            <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">
                Now Playing
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-16">
                @for ($i = 0; $i < 8; $i++)
                    <div class="mt-8">
                        <a href="/movie">
                            <img src="/img/parasite.jpg" class="hover:opacity-75 transition ease-in-out duration-150" alt="Parasite">
                        </a>
                        <div class="mt-2">
                            <a href="/movie" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                            <div class="flex items-center text-gray-400 text-sm mt-1">
                                <span><svg class="fill-current w-4 h-4 text-orange-500" xmlns="http://www.w3.org/2000/svg" id="color" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512"><path d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107"/></svg></span>
                                <span class="ml-1">85%</span>
                                <span class="mx-2">|</span>
                                <span>Aug 2, 1999</span>
                            </div>
                            <div class="text-gray-400 text-sm">
                                Action, Thriller, Comedy
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        
    </div>
    
@endsection