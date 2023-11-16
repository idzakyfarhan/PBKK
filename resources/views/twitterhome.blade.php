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
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex">
        <div class="w-1/6 bg-white h-screen border-r border-gray-200 overflow-hidden">
            <div class="p-4">
                <div class="mb-4 text-center">
                    <img src="https://via.placeholder.com/80" class="mx-auto rounded-full mb-2" alt="Profile Picture" width="80" height="80">
                    <h2 class="text-sm font-semibold">{{ Auth::user()->name }}</h2>
                    <p class="text-xs text-gray-600">{{ Auth::user()->email }}</p>
                    <div class="mt-2">
                        <p class="text-xs text-gray-600">Following: 100</p>
                        <p class="text-xs text-gray-600">Followers: 500</p>
                    </div>
                </div>

                <div class="text-center ">
                    <ul>
                        <li class="text-sm text-black mb-2 hover:bg-[#2AA9E0] hover:text-white rounded-lg w-full p-4 flex justify-start gap-3">
                            <img src="/icon/home.svg" width="15" alt=""/>
                            <p href="#" class="font-bold">Home</p>
                        </li>
                        <li class="text-sm text-black mb-2 hover:bg-[#2AA9E0] hover:text-white rounded-lg w-full p-4 flex justify-start gap-3">
                            <img src="/icon/bookmark.svg" width="15" alt=""/>
                            <p href="#" class="font-bold">Bookmarks</p>
                        </li>
                        <li class="text-sm text-black mb-2 hover:bg-[#2AA9E0] hover:text-white rounded-lg w-full p-4 flex justify-start gap-3">
                            <img src="/icon/user.svg" width="15" alt=""/>
                            <p href="#" class="font-bold">Profile</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col gap-3 px-4">
                <form method="POST" action="{{ route('logout') }}" class="border-2 border-[#555A64] text-center w-[100%] rounded-md overflow-hidden">
                    @csrf
                    <x-dropdown-link :textColor="'#555A64'" :bgColor="'#FFFFFF'" :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="w-5/6 p-4">
            <!-- Tweet input area -->
            <div class="bg-white rounded-lg p-4 mb-4">
                <textarea class="w-full p-2 mb-2 border border-gray-300 rounded" rows="3" placeholder="What's happening?"></textarea>
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Tweet</button>
            </div>

            <!-- Sample Tweet Cards (Replace this with dynamic data from backend) -->
            <div class="tweet-card border rounded-lg p-4 bg-white mb-4">
                <h2 class="font-bold">User Name</h2>
                <p class="text-gray-600">This is a sample tweet!</p>
            </div>

            <div class="tweet-card border rounded-lg p-4 bg-white mb-4">
                <h2 class="font-bold">Another User</h2>
                <p class="text-gray-600">Another tweet goes here.</p>
            </div>
            <!-- Add your own dynamic content for tweets here -->

        </div>
    </div>
</body>
</html>
