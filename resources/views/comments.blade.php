@extends('layouts.app')

@section('content')
    <div class="bg-white">
        <div class="tweet-card p-4 bg-white border-b border-gray-200">
            <h1 class="font-bold text-gray-400 text-2xl text-end">User Post</h1>
            <h2 class="font-bold">{{ $post->user->name }}</h2>
            <span
                class="font-light italic text-gray-500 text-xs -top-1 relative">{{ $post->created_at->diffForHumans() }}</span>
            <p class="text-gray-600 my-3">{{ $post->message_post }}</p>
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
                            <button class="bg-blue-300 hover:bg-blue-400 font-medium italic text-white"
                                onclick="closeModal('{{ $post->id }}')">close</button>
                            <div class="tweet-card p-5 bg-white">
                                <form method="POST" action="{{ route('comment.post', $post->id) }}">
                                    @csrf
                                    <h2 class="font-bold mb-3">Comments</h2>
                                    <textarea name="comment" class="border-2 border-blue-300 rounded-lg w-full p-3 resize-none" rows="2"
                                        placeholder="What do you think about the post?"></textarea>
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
    </div>
    <h1 class="p-4 mt-2 font-bold text-gray-400 text-2xl">Comments</h1>
    @foreach ($comments as $content)
        <div class="px-4 py-2">
            <div class="tweet-card border rounded-lg p-4 bg-white hover:bg-gray-50">
                <h2 class="font-bold">{{ $content->user->name }}</h2>
                <span class="font-light italic text-gray-500 text-xs -top-1 relative">{{ $content->created_at->diffForHumans() }}</span>
                <p class="text-gray-600 my-3">{{ $content->comment }}</p>
            </div>
        </div>
    @endforeach

    <script>
        function openModal(postId) {
            var modal = document.getElementById('modal_comments_' + postId);
            modal.showModal();
        }

        function closeModal(postId) {
            var modal = document.getElementById('modal_comments_' + postId);
            modal.close();
        }
    </script>
@endsection
