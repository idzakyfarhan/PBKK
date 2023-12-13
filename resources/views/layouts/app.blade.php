<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 flex relative">
        @if (session('notification'))
            <div id="toast-top-right"
                class="alert alert-success fixed flex items-center w-full max-w-xs p-4 space-x-4 text-white italic bg-[#2AA9E0] divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow top-5 right-5 space-x"
                role="alert">
                <div class="text-sm font-normal">{{ session('notification') }}</div>
                <div class="countdown-bar"></div>
            </div>
        @endif
        @if (session('alert'))
            <div id="toast-top-right"
                class="alert alert-success fixed flex items-center w-full max-w-xs p-4 space-x-4 text-white italic bg-red-600 divide-x rtl:divide-x-reverse divide-black rounded-lg shadow top-5 right-5 space-x"
                role="alert">
                <div class="text-sm font-normal">{{ session('alert') }}</div>
                <div class="countdown-bar"></div>
            </div>
        @endif
        <div class="w-1/5 bg-white"></div>
        <div class="w-1/5">
            @include('layouts.sidebar')
        </div>
        <div class="w-2/5 border-x border-gray-200 overflow-hidden">
            @yield('content')
        </div>
        <div class="w-1/5 bg-white"></div>
    </div>
    <dialog id="modal_comments" class="modal rounded-lg w-[40%] transition">
        <div class="flex flex-col justify-center relative">
            <button class="bg-blue-300 hover:bg-blue-400 font-medium italic text-white"
                onclick="modal_comments.close()">close</button>
            <div class="bg-white p-8 space-y-4">
                <div class="tweet-card border rounded-lg p-4 bg-white">
                    <h2 class="font-bold mb-3">Comments</h2>
                    <textarea name="message_post" class="border-2 border-blue-300 rounded-lg w-full p-3 resize-none" rows="2"></textarea>
                    <x-primary-button>
                        {{ __('Reply') }}
                    </x-primary-button>
                    </form>
                </div>
            </div>
    </dialog>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                var notification = document.getElementById("toast-top-right");
                if (notification) {
                    notification.style.display = "none";
                }
            }, 3000);
        });
    </script>
</body>

</html>
