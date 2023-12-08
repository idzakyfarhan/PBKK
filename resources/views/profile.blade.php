@extends('layouts.app')

@section('content')
        <div class="tweet-card border rounded-lg p-4 bg-white mb-4">
            <h2 class="font-bold mb-3">USER INI MASIH STATIC</h2>
            <p class="text-gray-600">TWEET STATIC</p>
            <div class="flex">
                <p class="text-gray-600 mt-2 mr-2">4</p>
                <form method="POST" >
                    <button onclick="">
                        <img class="mt-3.5" src="/icon/like.svg" width="15" alt=""/>
                    </button>
                </form>
            </div>
        </div>
@endsection

        