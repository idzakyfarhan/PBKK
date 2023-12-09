@extends('layouts.app')

@section('content')
    <div class="p-4">
        <div class="tweet-card border rounded-lg p-4 bg-white">
            <h2 class="font-bold mb-3">Share your thoughts!</h2>
            <form method="POST" action="{{ route('posts') }}">
                @csrf
                <textarea name="message_post" class="border-2 border-blue-300 rounded-lg w-full p-3 resize-none" rows="2"></textarea>
                <x-primary-button>
                    {{ __('Tweet') }}
                </x-primary-button>
            </form>
        </div>
    </div>
    <h1 class="p-4 font-bold text-gray-400 text-2xl">Daily Tweets</h1>
    <div class="p-4">
        @foreach ($posts as $post)
            <div class="tweet-card border rounded-lg p-4 bg-white mb-4">
                <h2 class="font-bold mb-3">{{ $post->user->name }}</h2>
                <p class="text-gray-600">{{ $post->message_post }}</p>
                <div class="flex flex-row justify-around w-full gap-5 mt-2">
                    <form method="POST" action="{{ route('like.post', $post->id) }}">
                        <div class="flex gap-1 items-center">
                            <p class="text-gray-600">{{ $post->like_post }}</p>
                            @csrf
                            <button type="submit">
                                <img class="" src="/icon/like.svg" width="17" alt="" />
                            </button>
                        </div>
                    </form>
                    <form method="POST">
                        <div class="flex gap-1.5 items-center">
                            <p class="text-gray-600 ">{{ $post->comment_post }}</p>
                            @csrf
                            <button type="submit">
                                <img class="" src="/icon/comment.svg" width="15" alt="" />
                            </button>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('bookmark.post', $post->id) }}">
                        <div class="flex gap-1.5 items-center">
                            <p class="text-gray-600 ">{{ $post->bookmark_post }}</p>
                            @csrf
                            <button type="submit">
                                <img class="" src="/icon/bookmark.svg" width="15" alt="" />
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
