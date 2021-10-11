@extends('layouts.main')

@section('content')
<div>
    <div class="container px-4 pt-16 mx-auto">
        <!--start popular actors-->
        <div class="popular-actors">
            <h2 class="text-lg font-semibold tracking-wider text-yellow-500 uppercase">Popular Actors</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach($popularActors as $actor)
                <div class="mt-8 actor">
                    <a href="{{ route('actors.show',$actor['id']) }}">
                        <img src="{{ $actor['profile_path'] }}" alt="profile" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="{{ route('actors.show',$actor['id']) }}" class="text-lg hover:text-gray-300">{{ $actor['name'] }}</a>
                        <div class="text-sm truncate text-gray-400">{{ $actor['known_for'] }}</div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <!--end popular actors-->

        <div class="page-load-status my-8">
            <div class="flex justify-center">
                <div class="infinite-scroll-request spinner my-8 text-4xl">&nbsp;</div>
            </div>
            <p class="infinite-scroll-last">End of content</p>
            <p class="infinite-scroll-error">Error</p>
        </div>

    </div>
</div>
@endsection

@section('scripts')
<script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
<script>
    let elem = document.querySelector('.grid');
    let infScroll = new InfiniteScroll(elem, {
        path: '/actors/page/@{{#}}',
        append: '.actor',
        // history: false,
    });
</script>
@endsection
