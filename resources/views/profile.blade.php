@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md p-4 divide-y-2 divide-gray-200 flex flex-col gap-5">
        <div class="flex flex-row-reverse items-center justify-between">
            <img src="https://via.placeholder.com/80" alt="Profile Picture" width="80" height="80">
            <div>
                <h2 class="text-2xl font-semibold">{{ Auth::user()->name }}</h2>
                <p class="text-base text-gray-600">{{ Auth::user()->email }}</p>
            </div>
        </div>
        <div class="pt-2 flex gap-5 justify-center">
            <p class="text-md text-gray-600">0 Following</p>
            <p class="text-md text-gray-600">0 Followers</p>
        </div>
    </div>
    <h1 class="p-4 mt-2 font-bold text-gray-400 text-2xl">Your Tweet</h1>
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
                        <p class="text-gray-600 ">{{ $post->comment_post }}</p>
                        <button type="submit">
                            <img class="" src="/icon/comment.svg" width="15" alt="" />
                        </button>
                    </div>
                </form>
                <form method="POST">
                    @csrf
                    <div class="flex gap-1.5 items-center">
                        <p class="text-gray-600 ">{{ $post->bookmark_post }}</p>
                        <button type="submit">
                            <img class="" src="/icon/bookmark.svg" width="15" alt="" />
                        </button>
                    </div>
                </form>
                <form method="POST" action="{{ route('posts.destroy', $post->id) }}">
                    @csrf
                    @method('DELETE')
                    <div class="flex gap-1.5 items-center">
                        <button type="submit">
                            <img class="" src="/icon/trash.svg" width="15" alt="" />
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
@endsection
