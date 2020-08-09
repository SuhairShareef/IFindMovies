<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies App</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center mr-4">
                <li class=" mb-4 lg:mb-0">
                    <a class="flex hover:opacity-75 transition ease-in-out duration-150 focus:outline-none" href="{{ route('movies.index') }}">
                        <svg class="w-10 mr-4" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><g id="Layer_18" data-name="Layer 18"><path d="m62 21h-51v-1.07l51.17-8.83a1 1 0 0 0 .83-1.16l-1.42-8.11a1 1 0 0 0 -1.16-.83l-58.59 10.12a1.08 1.08 0 0 0 -.65.41 1.05 1.05 0 0 0 -.17.75l.2 1.13a1 1 0 0 0 -.21.59v48a1 1 0 0 0 1 1h60a1 1 0 0 0 1-1v-40a1 1 0 0 0 -1-1zm-59-6h6v10h-6zm1.59 12-1.59 1.59v-1.59zm-1.59 8h58v2h-58zm0-2v-2h58v2zm42.41-4 6-6h7.18l-6 6zm-2.82 0h-7.18l6-6h7.18zm-10 0h-7.18l6-6h7.18zm-10 0h-7.18l6-6h7.18zm32.82 0 5.59-5.59v5.59zm-36.82-6-6 6h-7.18l2-2h2.59a1 1 0 0 0 1-1v-3zm-8.26-9.93 1.08-1.57 7.05-1.22-5 7.19-2.46.43v-3.9a1 1 0 0 0 -.67-.93zm32.53-.67-7 1.21 5-7.19 6.87-1.18zm7.58-7.63 7-1.22-4.85 7.17-7 1.21zm-17.33 9.31-7 1.22 5-7.18 7-1.22zm-9.81 1.7-7 1.21 5-7.18 7.05-1.22zm32.06-5.53 4.5-6.65 1 5.7zm-46.71 1.75-.71 1h-4.77v-.07zm-5.65 49v-22h58v22z"/><path d="m5 17.1h2v2h-2z"/><path d="m5 21h2v2h-2z"/><path d="m15 49.61 1.14 1.9a1 1 0 0 0 1.72 0l1.14-1.9v5.39h2v-9a1 1 0 0 0 -1.86-.51l-2.14 3.57-2.14-3.57a1 1 0 0 0 -1.86.51v9h2z"/><path d="m26.5 55a3.5 3.5 0 0 0 3.5-3.5v-3a3.5 3.5 0 0 0 -7 0v3a3.5 3.5 0 0 0 3.5 3.5zm-1.5-6.5a1.5 1.5 0 0 1 3 0v3a1.5 1.5 0 0 1 -3 0z"/><path d="m45 55h5v-2h-4v-2h4v-2h-4v-2h4v-2h-5a1 1 0 0 0 -1 1v8a1 1 0 0 0 1 1z"/><path d="m34.17 54.55a1 1 0 0 0 1.66 0l2-3a1 1 0 0 0 .17-.55v-6h-2v5.7l-1 1.5-1-1.5v-5.7h-2v6a1 1 0 0 0 .17.55z"/><path d="m40 45h2v10h-2z"/><path d="m54 41h-44a1 1 0 0 0 -1 1v16a1 1 0 0 0 1 1h44a1 1 0 0 0 1-1v-16a1 1 0 0 0 -1-1zm-1 16h-42v-14h42z"/></g></svg>
                        <div class="lato mt-1 align-bottom text-xl">MoviesWebsite</div>
                    </a>
                </li>
                <li class="md:ml-16 mb-4 lg:mb-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300 hover:opacity-75 transition ease-in-out duration-150">Movies</a>
                </li>
                <li class="md:ml-6 mb-4 lg:mb-0">
                    <a href="#" class="hover:text-gray-300 hover:opacity-75 transition ease-in-out duration-150">TV Shows</a>
                </li>
                <li class="md:ml-6 mb-4 lg:mb-0">
                    <a href="#" class="hover:text-gray-300 hover:opacity-75 transition ease-in-out duration-150">Actors</a>
                </li>
            </ul>
            <div class="flex items-center">
                <div class="relative">
                    <input type="text" class="text-sm bg-gray-800 rounded-full lg:w-64 md:w-50 sm:w-30 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
                    <div class="absolute top-0">
                        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><path d="M447.615 64.386C406.095 22.866 350.892 0 292.175 0s-113.92 22.866-155.439 64.386C95.217 105.905 72.35 161.108 72.35 219.824c0 53.683 19.124 104.421 54.132 144.458L4.399 486.366c-5.864 5.864-5.864 15.371 0 21.236C7.331 510.533 11.174 512 15.016 512s7.686-1.466 10.617-4.399l122.084-122.083c40.037 35.007 90.775 54.132 144.458 54.132 58.718 0 113.919-22.866 155.439-64.386 41.519-41.519 64.385-96.722 64.385-155.439s-22.865-113.92-64.384-155.439zm-21.236 289.643c-74.001 74-194.406 74-268.407 0-74-74-74-194.407 0-268.407 37.004-37.004 85.596-55.5 134.204-55.5 48.596 0 97.208 18.505 134.204 55.5 73.998 73.999 73.998 194.406-.001 268.407z"/></svg>
                    </div>
                </div>
                <div class="ml-4">
                    <a href="#">
                        <img src="/img/avatar.png" alt="avatar" class="rounded-full w-8 h-full">
                    </a>
                </div>
            </div>
            
        </div>
    </nav>
    @yield('content')
</body>
</html>