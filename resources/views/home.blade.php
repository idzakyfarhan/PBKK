@extends('layouts.app')

@section('content')
    <div class="p-4">
        <div class="tweet-card border rounded-lg p-4 bg-white">
            <h2 class="font-bold mb-3">Share your thoughts!</h2>
            <form method="POST" action="{{ route('posts') }}">
                @csrf
                <textarea name="message_post" class="border-2 border-blue-300 rounded-lg w-full p-3 resize-none" rows="2" placeholder="What's on your mind?"></textarea>
                <x-primary-button>
                    {{ __('Tweet') }}
                </x-primary-button>
            </form>
        </div>
    </div>
    <h1 class="p-4 font-bold text-gray-400 text-2xl">Daily Tweets</h1>
    <form action="{{ route('home') }}" method="GET" class="p-4">
        <div class="relative">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="text" name="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#2AA9E0] focus:border-[#2AA9E0]" placeholder="Search tweet or user..." required>
            <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-[#2AA9E0] hover:bg-[#317c9c] focus:ring-4 focus:outline-none focus:ring-[#2AA9E0] font-medium rounded-lg text-sm px-4 py-2">Search</button>
        </div>
    </form>
    <div class="p-4">
        @foreach ($posts as $post)
            <div class="tweet-card border rounded-lg p-4 bg-white mb-4 hover:bg-gray-50 transition">
                <div onclick="seeComment('{{ $post->id }}')">
                    <h2 class="font-bold">{{ $post->user->name }}</h2>
                    <span class="font-light italic text-gray-500 text-xs -top-1 relative">{{ $post->created_at->diffForHumans() }}</span>
                    <p class="text-gray-600 my-3">{{ $post->message_post }}</p>
                </div>
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
                    <div class="flex gap-1.5 items-center">
                        <p class="text-gray-600 ">{{ $post->comment_post }}</p>
                        <button type="submit" onclick="openModal('{{ $post->id }}')">
                            <img class="" src="/icon/comment.svg" width="15" alt="" />
                        </button>
                        <dialog id="modal_comments_{{ $post->id }}" class="modal rounded-lg w-[40%] transition">
                            <div class="flex flex-col justify-center relative">
                                <button class="bg-[#2AA9E0] hover:bg-[#317c9c] font-medium italic text-white"
                                onclick="closeModal('{{ $post->id }}')">close</button>
                                <div class="tweet-card p-5 bg-white">
                                    <form method="POST" action="{{ route('comment.post', $post->id) }}">
                                        @csrf
                                        <h2 class="font-bold mb-3">Comments</h2>
                                        <textarea name="comment" class="border-2 border-blue-300 rounded-lg w-full p-3 resize-none" rows="2" placeholder="What do you think about the post?"></textarea>
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <x-primary-button>
                                            {{ __('Reply') }}
                                        </x-primary-button>
                                    </form>
                                </div>
                        </dialog>
                    </div>
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

    <script>
        function openModal(postId) {
            var modal = document.getElementById('modal_comments_' + postId);
            modal.showModal();
        }
        function closeModal(postId) {
            var modal = document.getElementById('modal_comments_' + postId);
            modal.close();
        }
        function seeComment(postId) {
            window.location.href = '/comments/' + postId;
        }
    </script>
@endsection
