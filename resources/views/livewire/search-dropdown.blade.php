<div class="relative mt-3 md:mt-0 " x-data="{ isOpen : true }" @click.away="isOpen = false">
    <input x-ref="search" @focus="isOpen = true" @keydown.window="if(event.keyCode === 191){event.preventDefault();$refs.search.focus();}" @keydown.escape.window="isOpen = false" wire:model.debounce.500ms="search" @keydown.shift.tab="isOpen = false" @keydown="isOpen = true" type="text" class="w-64 px-4 py-1 pl-8 text-sm bg-gray-800 rounded-full focus:outline-none focus:ring" placeholder="Search">
    <div class="absolute top-0">
        <svg class="w-4 mt-2 ml-2 text-gray-500 fill-current" viewBox="0 0 24 24">
            <path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z" />
        </svg>
    </div>

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div>

    @if(strlen($search) >= 2)
    <div class=" z-50 absolute text-sm bg-gray-800 rounded w-64 mt-4" x-show.transition.opacity="isOpen">
        @if($searchResults->count() >0)
        <ul>
            @foreach($searchResults as $result)
            <li class="border-b border-gray-700">
                <a href="{{ route('movies.show',$result['id']) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center" @if ($loop->last)
                    @keydown.tab.exact="isOpen=false"
                    @endif
                    >
                    @if($result['poster_path'])
                    <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path'] }}" alt="poster" class="w-8">
                    @else
                    <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8">
                    @endif
                    <span>
                        {{ $result['title'] }}
                    </span>
                </a>
            </li>
            @endforeach
        </ul>
        @else
        <div class="px-3 py-3">No Results for "{{$search}}"</div>
        @endif
    </div>
    @endif

</div>
