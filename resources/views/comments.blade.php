@extends('layouts.app')

@section('content')
    <div class="bg-white">
        <div class="tweet-card p-4 bg-white">
            <h2 class="font-bold">ecky</h2>
            <span class="font-light italic text-gray-500 text-xs -top-1 relative">10 Minutes</span>
            <p class="text-gray-600 my-3">P</p>
            <div class="flex flex-row justify-around w-full gap-5 mt-2">
                <form method="POST">
                    <div class="flex gap-1 items-center">
                        <p class="text-gray-600">3</p>
                        @csrf
                        <button type="submit">
                            <img class="" src="/icon/like.svg" width="17" alt="" />
                        </button>
                    </div>
                </form>
                <!-- <form method="POST"> -->
                    <div class="flex gap-1.5 items-center">
                        <p class="text-gray-600 ">2</p>
                        <!-- @csrf -->
                        <button type="submit" onclick="modal_comments.showModal()">
                            <img class="" src="/icon/comment.svg" width="15" alt="" />
                        </button>
                    </div>
                <!-- </form> -->
                <form method="POST">
                    <div class="flex gap-1.5 items-center">
                        <p class="text-gray-600 ">1</p>
                        @csrf
                        <button type="submit">
                            <img class="" src="/icon/bookmark.svg" width="15" alt="" />
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="p-4">
        <div class="tweet-card border rounded-lg p-4 bg-white mb-4">
            <h2 class="font-bold">jeje </h2>
            <span class="font-light italic text-gray-500 text-xs -top-1 relative">10 Minutes</span>
            <p class="text-gray-600 my-3">komeng</p>
        </div>
        <div class="tweet-card border rounded-lg p-4 bg-white">
            <h2 class="font-bold">jeje </h2>
            <span class="font-light italic text-gray-500 text-xs -top-1 relative">10 Minutes</span>
            <p class="text-gray-600 my-3">lala</p>
        </div>
    </div>
@endsection
