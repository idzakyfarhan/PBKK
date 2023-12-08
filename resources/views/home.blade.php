@extends('layouts.app')

@section('content')
    <div class="tweet-card border rounded-lg p-4 bg-white mb-4">
        <h2 class="font-bold mb-3">Share your thoughts!</h2>
        <form method="POST" action="{{ route('posts') }}">
            @csrf
            <textarea name="message_post" class="border-2 border-blue-300 rounded-lg w-full p-3 resize-none" rows="2"></textarea>
            <x-primary-button>
                {{ __('Tweet') }}
            </x-primary-button>
        </form>
    </div>

    @foreach ($posts as $post)
        <div class="tweet-card border rounded-lg p-4 bg-white mb-4">
            <h2 class="font-bold mb-3">{{ $post->user->name }}</h2>
            <p class="text-gray-600">{{ $post->message_post }}</p>
            <div class="flex">
                <p class="text-gray-600 mt-2 mr-2">{{ $post->like_post }}</p>
                <form method="POST" >
                    <button onclick="">
                        <img class="mt-3.5" src="/icon/like.svg" width="15" alt=""/>
                    </button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
