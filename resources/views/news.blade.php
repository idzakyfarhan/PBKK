@extends('layouts.app')

@section('content')
    <h1 class="p-4 mt-2 font-bold text-gray-400 text-2xl">Breaking News</h1>
    <div class="p-4 relative">
        @foreach ($news as $new)
        <div class="tweet-card border rounded-lg p-4 bg-white mb-4">
            <h2 class="font-bold">{{ $new->title }}</h2>
            <a href="{{ $new->url }}" class="text-gray-600 underline">{{ $new->author }}</a>
            <img class="w-1/2 rounded-lg my-3" src="{{ $new->urlToImage }}" alt="image">
            <p>{{ $new->description }}</p>
            <div class="flex flex-row gap-4 border-2 rounded-lg w-fit px-3 py-2">
                <form method="POST">
                    <button onclick="" class="flex items-center justify-center gap-1">
                        <p class="text-gray-600">0</p>
                        <img src="/icon/upvote.svg" width="20" alt="" />
                    </button>
                </form>
                <form method="POST">
                    <button onclick="" class="flex items-center justify-center gap-1">
                        <p class="text-gray-600">0</p>
                        <img src="/icon/downvote.svg" width="20" alt="" />
                    </button>
                </form>
            </div>
        </div>
        @endforeach
        <div class="fixed bottom-4 shadow-xl">
            {{ $news->onEachSide(3)->links('custom-pagination') }}
        </div>
    </div>
@endsection
