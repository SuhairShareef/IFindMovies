@extends('layouts.main')

@section('content')
    <!-- Movie Information Section Start -->
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row justify-between">
            <div class="flex-none">
                @if ($movie['poster_path'] == null)
                    <img src="/img/no_image.jpg" alt="{{ $movie['original_title'] }}" class="w-64 md:w-96 sm:w-96">
                @else
                    <img src="https://image.tmdb.org/t/p/w500/.{{$movie['poster_path']}}" alt="{{ $movie['original_title'] }}" class="w-64 md:w-96 sm:w-96">
                @endif 
                
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{ $movie['title'] }}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <span><svg class="fill-current w-4 h-4 text-orange-500" xmlns="http://www.w3.org/2000/svg" id="color" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512"><path d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107"/></svg></span>
                    <span class="ml-1">{{ $movie['vote_average'] * 10 }}%</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                    <span class="mx-2">|</span>
                    <span> @foreach ($movie['genres'] as $genre)
                        {{ $genre['name'] }}@if (!$loop->last),  
                        @endif
                    @endforeach
                </span>
                </div>

                <p class="text-gray-300 mt-8">{{ $movie['overview'] }}</p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        @foreach ($movie['credits']['crew'] as $crew)
                            @if ($loop->index < 2)
                                <div>
                                    <div class="mr-20">{{ $crew['name'] }}</div>
                                    <div class="text-sm text gray-400">{{ $crew['job'] }}</div>
                                </div>
                        @endif
                        @endforeach
                    </div>
                </div>
                <div x-data="{ open: false }">
                    @if (count($movie['videos']['results']) > 0)
                        <div class="mt-12">
                            <button
                                @click="open = true"
                                @keydown.escape.window="isOpen = false"
                                 class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-700 transition ease-in-out duration-150">
                                    <svg class="w-5 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                                        <g>
                                            <g id="play-circle-outline">
                                                <path d="M204,369.75L357,255L204,140.25V369.75z M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255    S395.25,0,255,0z M255,459c-112.2,0-204-91.8-204-204S142.8,51,255,51s204,91.8,204,204S367.2,459,255,459z"/>
                                            </g>
                                        </g>
                                    </svg>
                                <span class="ml-2">Play Trailer</span>
                            </button>
                        </div>
                    @endif

                    <div style="background-color:rgba(0 ,0 ,0 , 0.5);" class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                    x-show.ransition.opacity="open">
                        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                            <div class="bg-gray-900 rounded">
                                <div class="flex justify-end pr-4 pt-2">
                                    <button class="text-3xl leading-none hover:text-gray-300"
                                    @click="open=false"
                                    >&times;</button>
                                </div>
                                <div class="modal-body px-8 py-8">
                                    <div class="responsive-container overflow-hidden relative" style="padding-top:56.25%">
                                        <iframe width="560" height="315" class="responsive-iframe absolute top-0 left-0 w-full h-full" style="border:0" src="https://www.youtube.com/embed/{{ $movie['videos']['results']['0']['key'] }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Movie Information Section End -->

    <!-- Movie Cast Section Start -->
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-12 mb-4">
                @foreach ($movie['credits']['cast'] as $cast)
                    @if ($loop->index < 5)
                        <div class="mt-8">
                            <a href="/people/{{ $cast['id'] }}">
                                @if ($cast['profile_path'] == null)
                                    <img src="/img/no_image.jpg" class="hover:opacity-75 transition ease-in-out duration-150">
                                @else
                                    <img src="https://image.tmdb.org/t/p/w500/.{{$cast['profile_path']}}" class="hover:opacity-75 transition ease-in-out duration-150"> 
                                @endif 
                            </a>
                            <div class="mt-2">
                                <a href="/people/{{ $cast['id'] }}" class="text-md mt-2 hover:text-gray-300">{{ $cast['character'] }}</a>
                                <div class="text-gray-400 text-sm"><span>{{ $cast['name'] }}</span></div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- Movie Cast Section End -->

    <!-- Images Section Start -->
    <div class="images border-b border-gray-800" x-data="{ open: false, image: '' }">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mb-4">
                @foreach ($movie['images']['backdrops'] as $image)
                    @if ($loop->index < 6)
                        <div class="mt-8 mb-2">
                            <a 
                                href="#"
                                @click.prevent="
                                    open = true
                                    image = 'https://image.tmdb.org/t/p/original/.{{$image['file_path']}}'  
                                    "
                            >
                                <img src="https://image.tmdb.org/t/p/w500/.{{$image['file_path']}}">
                            </a>
                        </div>
                    @endif
                @endforeach
                @for ($i = 0; $i < 3; $i++)
                    
                @endfor
            </div>

            <div style="background-color:rgba(0 ,0 ,0 , 0.5);" class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                    x-show.ransition.opacity="open">
                <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                    <div class="bg-gray-900 rounded">
                        <div class="flex justify-end pr-4 pt-2">
                            <button class="text-3xl leading-none hover:text-gray-300"
                            @click="open=false"
                            @keydown.escape.window="isOpen = false"
                            >&times;</button>
                        </div>
                        <div class="modal-body px-8 py-8">
                            <img :src="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Images Section End -->
@endsection