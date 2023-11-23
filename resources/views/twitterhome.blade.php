<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter-like Page</title>
    @vite('resources/css/app.css')
    <style>
        .tweet-card {
            border-color: #1da1f2;
        }
    </style>
    <link rel="stylesheet" href="/path/to/toastr.css">
    <script src="/path/to/toastr.js"></script>
</head>

<body class="bg-gray-100 font-sans">
    <div class="flex">
        <div class="w-1/6 bg-white h-screen border-r border-gray-200 overflow-hidden">
            <div class="p-4">
                <div class="mb-4 text-center">
                    <img src="https://via.placeholder.com/80" class="mx-auto rounded-full mb-2" alt="Profile Picture"
                        width="80" height="80">
                    <h2 class="text-sm font-semibold">{{ Auth::user()->name }}</h2>
                    <p class="text-xs text-gray-600">{{ Auth::user()->email }}</p>
                    <div class="mt-2">
                        <p class="text-xs text-gray-600">Following: 100</p>
                        <p class="text-xs text-gray-600">Followers: 500</p>
                    </div>
                </div>

                <div class="text-center ">
                    <ul>
                        <li
                            class="text-sm text-black mb-2 hover:bg-[#2AA9E0] hover:text-white rounded-lg w-full p-4 flex justify-start gap-3">
                            <img src="/icon/home.svg" width="15" alt="" />
                            <p href="#" class="font-bold">Home</p>
                        </li>
                        <li
                            class="text-sm text-black mb-2 hover:bg-[#2AA9E0] hover:text-white rounded-lg w-full p-4 flex justify-start gap-3">
                            <img src="/icon/bookmark.svg" width="15" alt="" />
                            <p href="#" class="font-bold">Bookmarks</p>
                        </li>
                        <li
                            class="text-sm text-black mb-2 hover:bg-[#2AA9E0] hover:text-white rounded-lg w-full p-4 flex justify-start gap-3">
                            <img src="/icon/user.svg" width="15" alt="" />
                            <p href="#" class="font-bold">Profile</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col gap-3 px-4">
                <form method="POST" action="{{ route('logout') }}"
                    class="border-2 border-[#555A64] text-center w-[100%] rounded-md overflow-hidden">
                    @csrf
                    <x-dropdown-link :textColor="'#555A64'" :bgColor="'#FFFFFF'" :href="route('logout')"
                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </div>
        </div>

        <div class="w-5/6 p-4">
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
                    <h2 class="font-bold mb-3">User Name</h2>
                    <p class="text-gray-600">{{ $post->message_post }}</p>
                    <div class="flex">
                        <p class="text-gray-600 mt-2 mr-2">{{ $post->like_post }}</p>
                        <img class="mt-2 " src="/icon/like.svg" width="15" alt="" />
                    </div>
                </div>
            @endforeach
            {{-- <div class="tweet-card border rounded-lg p-4 bg-white mb-4">
                <h2 class="font-bold">User Name</h2>
                <p class="text-gray-600">This is a sample tweet!</p>
                <div class="flex">
                    <p class="text-gray-600 mt-2 mr-2">100</p>
                    <img class="mt-2 " src="/icon/like.svg" width="15" alt="" />
                </div>
            </div>

            <div class="tweet-card border rounded-lg p-4 bg-white mb-4">
                <h2 class="font-bold">Another User</h2>
                <div class="flex">
                    <p class="text-gray-600 mt-2 mr-2">100</p>
                    <img class="mt-2 " src="/icon/like.svg" width="15" alt="" />
                </div>
            </div> --}}
        </div>
    </div>
    @if (session('notification'))
        <script>
            toastr.success('{{ session('notification') }}');
        </script>
    @endif
</body>

</html>
