@extends('layouts.app')

@section('content')
    <div class="tweet-card border rounded-lg p-4 bg-white mb-4">
        <h2 class="font-bold mb-3">NEWS NAME</h2>
        <p class="text-gray-600 mb-2">TWEET STATIC</p>
        <img class="w-1/2 rounded-lg mb-3" src="https://via.placeholder.com/500x300" alt="Tweet Image">
        <div class="flex">
            <form method="POST">
                <button onclick="" class="flex">
                    <p class="text-gray-600 mt-3 mr-2">4</p>
                    <img class="mt-3.5" src="/icon/upvote.svg" width="20" alt=""/>
                    <p class="text-gray-600 mt-3 ml-2">4</p>
                    <img class="mt-3.5 ml-3" src="/icon/downvote.svg" width="20" alt=""/>
                </button>
            </form>
        </div>
    </div>
@endsection
