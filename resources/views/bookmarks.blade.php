@extends('layouts.app')

@section('content')
    <h1 class="p-4 mt-2 font-bold text-gray-400 text-2xl">Saved Tweets</h1>
    @foreach ($posts as $post)
        <div class="tweet-card border rounded-lg p-4 m-4 bg-white mb-4">
            <h2 class="font-bold mb-3">{{ $post->user->name }}</h2>
            <p class="text-gray-600">{{ $post->message_post }}</p>
            <div class="flex flex-row justify-around w-full gap-5 mt-2">
                <form method="POST" action="{{ route('like.post', $post->id) }}">
                    @csrf
                    <div class="flex gap-1 items-center">
                        <p class="text-gray-600">{{ $post->like_post }}</p>
                        <button type="submit">
                            <img class="" src="/icon/like.svg" width="17" alt="" />
                        </button>
                    </div>
                </form>
                <form method="POST">
                    @csrf
                    <div class="flex gap-1.5 items-center">
                        <p class="text-gray-600 ">2</p>
                        <button type="submit">
                            <img class="" src="/icon/comment.svg" width="15" alt="" />
                        </button>
                    </div>
                </form>
                <form method="POST" action="{{ route('bookmark.post', $post->id) }}">
                    @csrf
                    <div class="flex gap-1.5 items-center">
                        <p class="text-gray-600 ">{{ $post->bookmark_post }}</p>
                        <button type="submit">
                            <img class="" src="/icon/bookmark.svg" width="15" alt="" />
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
