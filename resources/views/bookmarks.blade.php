@extends('layouts.app')

@section('content')
    <h1 class="p-4 mt-2 font-bold text-gray-400 text-2xl">Saved Tweets</h1>
    @foreach ($posts as $post)
        <div class="tweet-card border rounded-lg p-4 m-4 bg-white mb-4">
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
    @endforeach
@endsection
