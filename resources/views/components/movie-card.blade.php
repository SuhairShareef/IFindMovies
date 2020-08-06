<div>
    <div class="mt-8">
        <a href="{{ route('movies.show', $movie['id']) }}">
            <img src="https://image.tmdb.org/t/p/w500/.{{$movie['poster_path']}}" class="hover:opacity-75 transition ease-in-out duration-150" alt="{{ $movie['original_title'] }}">
        </a>
        <div class="mt-2">
            <a href="{{ route('movies.show', $movie['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{ $movie['title'] }}</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
                <span><svg class="fill-current w-4 h-4 text-orange-500" xmlns="http://www.w3.org/2000/svg" id="color" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512"><path d="m23.363 8.584-7.378-1.127-3.307-7.044c-.247-.526-1.11-.526-1.357 0l-3.306 7.044-7.378 1.127c-.606.093-.848.83-.423 1.265l5.36 5.494-1.267 7.767c-.101.617.558 1.08 1.103.777l6.59-3.642 6.59 3.643c.54.3 1.205-.154 1.103-.777l-1.267-7.767 5.36-5.494c.425-.436.182-1.173-.423-1.266z" fill="#ffc107"/></svg></span>
                <span class="ml-1">{{ $movie['vote_average'] * 10 }}%</span>
                <span class="mx-2">|</span>
                <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
            </div>
            <div class="text-gray-400 text-sm">
                @foreach ($movie['genre_ids'] as $genre)
                    {{ $genres->get($genre) }}@if (!$loop->last),  
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>