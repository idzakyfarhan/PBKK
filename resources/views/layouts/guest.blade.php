<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .strikethrough {
            text-decoration: line-through;
        }
    </style>
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-row sm:justify-between items-center pt-6 sm:pt-0">
        <div class="relative bg-blue-400 w-[50%] h-screen flex flex-col justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" width="256px" height="256px" class="z-10">
                <path fill="#76ecff"
                    d="M100.2,42.5c-0.4,0.4-0.7,1-0.6,1.6c0.1,1.9,2.6,47.4-45.7,58.8c-0.2,0-19.4,4-36-4.2c7-0.2,17.1-2,24.1-9.9c0.5-0.6,0.7-1.4,0.3-2.2c-0.3-0.7-1-1.2-1.8-1.2c0,0,0,0,0,0c-0.1,0.1-10.6,0-15.5-10c1.9,0.1,4.3,0,6.3-0.9c0.8-0.4,1.3-1.2,1.2-2c-0.1-0.9-0.7-1.6-1.6-1.7c-0.5-0.1-12.3-2.7-13.9-15.5c1.8,0.8,4.1,1.4,6.3,1.1c0.8-0.1,1.4-0.7,1.6-1.4c0.2-0.8,0-1.6-0.6-2.1c-0.5-0.4-11.5-10.2-6.3-22.9c5.7,6,22.5,21.4,42.9,20.3c0.6,0,1.1-0.3,1.5-0.8c0.4-0.5,0.5-1.1,0.3-1.7c-0.4-1.5-0.6-3.1-0.6-4.7c0-10.4,8.3-18.9,18.6-18.9c5,0,9.7,2,13.2,5.6c0.4,0.4,0.9,0.6,1.4,0.6c2.1,0,5.6-0.2,9.6-1.8c-1.1,1.4-2.8,3.1-5.3,5.1c-0.7,0.5-1,1.5-0.6,2.3c0.3,0.8,1.2,1.3,2,1.3c0.5,0,2.9-0.2,5.6-0.8C105,37.9,103,39.9,100.2,42.5z" />
                <path fill="#fff"
                    d="M32.1 65.1c.8-.1 1.4-.7 1.6-1.4.2-.8 0-1.6-.6-2.1-.5-.4-11.5-10.2-6.3-22.9 5.7 6 22.5 21.4 42.9 20.3.6 0 1.1-.3 1.5-.8.4-.5.5-1.1.3-1.7-.4-1.5-.6-3.1-.6-4.7 0-10.4 8.3-18.9 18.6-18.9 3.3 0 14.2-3 15.3-4.4-4 1.6-7.5 1.8-9.6 1.8-.5 0-1-.2-1.4-.6-3.5-3.6-8.2-5.6-13.2-5.6C70.3 24.1 62 32.5 62 42.9c0 1.6.2 3.2.6 4.7.1.6 0 1.2-.3 1.7-.4.5-.9.8-1.5.8-20.4 1.2-37.2-14.3-42.9-20.3-5.2 12.6 5.8 22.4 6.3 22.9.6.5.8 1.3.6 2.1-.2.8-.9 1.3-1.6 1.4-2.3.3-4.5-.3-6.3-1.1 1.1 8.5 6.6 12.5 10.4 14.3-.7-1.6-1.2-3.3-1.5-5.4C27.5 64.8 29.8 65.5 32.1 65.1zM40.1 83.4c.8-.4 1.3-1.2 1.2-2-.1-.9-.7-1.6-1.6-1.7-.3-.1-5-1.1-8.8-4.9-1.8.7-4 .8-5.9.7 2.5 5.1 6.5 7.7 9.8 8.9C36.5 84.3 38.5 84.1 40.1 83.4zM50.8 97.7c.5-.6.7-1.4.3-2.2-.3-.7-1-1.2-1.8-1.2 0 0 0 0 0 0-.1 0-5 0-9.7-3.2-6.8 5.9-15.5 7.4-21.8 7.6 8.5 4.2 17.8 5.2 24.7 5.2C45.5 102.4 48.4 100.4 50.8 97.7z" />
                <path fill="#444b54"
                    d="M24.2 55.8c-.7 0-1.4-.2-2-.7-.5-.5-13.1-11.7-7.1-26.3.4-.9 1.2-1.6 2.2-1.8 1-.2 2 .1 2.7.9 16.7 17.5 32.3 19.5 39.3 19.4-.3-1.4-.4-2.8-.4-4.2 0-12 9.7-21.9 21.6-21.9 5.7 0 11 2.2 15 6.2 6.7-.4 10.7-3.7 10.8-3.7 1.3-1.1 3.2-.9 4.2.3 1.1 1.3.9 3.2-.3 4.2-.2.2-5.8 4.9-15 5.2-.1 0-.1 0-.2 0-1.3 0-2.6-.6-3.5-1.5-2.9-3-6.9-4.7-11.1-4.7C72 27.1 65 34.2 65 42.9c0 1.3.2 2.7.5 4 .4 1.5.1 3-.8 4.2-.9 1.2-2.3 2-3.8 2-18 1-33.2-9.9-41.4-17.4-.6 8.4 6.3 14.5 6.6 14.8 1.2 1.1 1.4 3 .3 4.2C25.9 55.4 25 55.8 24.2 55.8zM95.9 27.6C95.9 27.6 95.9 27.6 95.9 27.6 95.9 27.6 95.9 27.6 95.9 27.6zM99.6 47.1c-1 0-2-.5-2.6-1.5-.8-1.4-.3-3.3 1.1-4.1 5.4-3.1 11-10.2 11.1-10.3 1-1.3 2.9-1.5 4.2-.5 1.3 1 1.5 2.9.5 4.2-.3.3-6.4 8.1-12.8 11.8C100.6 46.9 100.1 47.1 99.6 47.1zM30.8 73.7c-.2 0-.4 0-.6-.1-.6-.1-14.4-3.2-16.3-18.1-.2-1.6 1-3.1 2.6-3.4 1.6-.2 3.1 1 3.4 2.6 1.4 10.7 11.2 12.9 11.6 13 1.6.3 2.7 1.9 2.3 3.6C33.4 72.8 32.2 73.7 30.8 73.7z" />
                <path fill="#444b54"
                    d="M40.5 88.5L40.5 88.5c-1.7.1-3.8-.4-5.1-.8-4.1-1.2-9.8-4-13.1-11-.7-1.5-.1-3.3 1.4-4 1.5-.7 3.3-.1 4 1.4 3.8 7.9 11.9 8.3 12.6 8.4 1.7-.1 3.2 1.3 3.2 3C43.5 87.1 42.1 88.5 40.5 88.5zM38.8 82.9C38.8 82.9 38.8 82.9 38.8 82.9 38.8 82.9 38.8 82.9 38.8 82.9zM38.8 82.9C38.8 82.9 38.8 82.9 38.8 82.9 38.8 82.9 38.8 82.9 38.8 82.9zM38.8 82.9C38.8 82.9 38.8 82.9 38.8 82.9 38.8 82.9 38.8 82.9 38.8 82.9zM38.8 82.9C38.8 82.9 38.8 82.9 38.8 82.9 38.8 82.9 38.8 82.9 38.8 82.9zM40.6 95c-.2 0-.4 0-.6-.1-.2 0-.4-.1-.6-.2-.2-.1-.4-.2-.5-.3-.2-.1-.3-.2-.5-.4-.1-.1-.3-.3-.4-.5-.1-.2-.2-.3-.3-.5-.1-.2-.1-.4-.2-.6 0-.2-.1-.4-.1-.6 0-.2 0-.4.1-.6 0-.2.1-.4.2-.6.1-.2.2-.4.3-.5.1-.2.2-.3.4-.5.1-.1.3-.3.5-.4.2-.1.3-.2.5-.3.2-.1.4-.1.6-.2.4-.1.8-.1 1.2 0 .2 0 .4.1.6.2.2.1.4.2.5.3.2.1.3.2.5.4s.3.3.4.5.2.3.3.5c.1.2.1.4.2.6 0 .2.1.4.1.6 0 .2 0 .4-.1.6 0 .2-.1.4-.2.6-.1.2-.2.4-.3.5s-.2.3-.4.5c-.1.1-.3.3-.5.4-.2.1-.3.2-.5.3-.2.1-.4.1-.6.2C41 94.9 40.8 95 40.6 95z" />
                <g>
                    <path fill="#444b54"
                        d="M17.9,101.7c-1.6,0-3-1.3-3-2.9c0-1.7,1.3-3,2.9-3.1c5.3-0.1,10.1-1.2,14.1-3.1c1.5-0.7,3.3-0.1,4,1.4c0.7,1.5,0.1,3.3-1.4,4C29.7,100.3,24.1,101.5,17.9,101.7C17.9,101.7,17.9,101.7,17.9,101.7z" />
                </g>
                <g>
                    <path fill="#444b54"
                        d="M42.3,106.9c-3,0-6.4-0.2-10-0.7c-1.6-0.2-2.8-1.8-2.5-3.4c0.2-1.6,1.8-2.8,3.4-2.5c10.8,1.6,20-0.3,20.1-0.3C99,89.1,96.7,46.1,96.6,44.3c-0.1-1.7,1.1-3.1,2.8-3.2c1.7-0.1,3.1,1.1,3.2,2.8c0.1,2,2.7,49.9-48,61.9C54.2,105.9,49.3,106.9,42.3,106.9z" />
                </g>
            </svg>
            <img src="/background/bg-pattern.png" alt="" class="absolute top-0 left-0 w-full h-full object-cover">
        </div>

        <div class="bg-blue-100 w-[50%] h-screen flex flex-col justify-center items-center">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
