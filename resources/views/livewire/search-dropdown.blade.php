<div class="relative mt-3 md:mt-0">
    <input wire:model.debounce.500ms="search" type="text" class="text-sm bg-gray-800 rounded-full lg:w-64 md:w-50 sm:w-30 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
    <div class="absolute top-0">
        <svg class="fill-current w-4 text-gray-500 mt-2 ml-2" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><path d="M447.615 64.386C406.095 22.866 350.892 0 292.175 0s-113.92 22.866-155.439 64.386C95.217 105.905 72.35 161.108 72.35 219.824c0 53.683 19.124 104.421 54.132 144.458L4.399 486.366c-5.864 5.864-5.864 15.371 0 21.236C7.331 510.533 11.174 512 15.016 512s7.686-1.466 10.617-4.399l122.084-122.083c40.037 35.007 90.775 54.132 144.458 54.132 58.718 0 113.919-22.866 155.439-64.386 41.519-41.519 64.385-96.722 64.385-155.439s-22.865-113.92-64.384-155.439zm-21.236 289.643c-74.001 74-194.406 74-268.407 0-74-74-74-194.407 0-268.407 37.004-37.004 85.596-55.5 134.204-55.5 48.596 0 97.208 18.505 134.204 55.5 73.998 73.999 73.998 194.406-.001 268.407z"/></svg>
    </div>

    {{-- The search results section --}}
    <div class="absolute bg-gray-800 rounded text-sm w-64 mt-4">
        <ul>
            <li class="border-b border-gray-700">
                <a href="#" class="block hover:bg-gray-700 px-3 py-3">{{ $search }}</a>
            </li>
        </ul>
    </div>
</div>

