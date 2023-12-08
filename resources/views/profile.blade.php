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
                    <img src="https://via.placeholder.com/80" class="mx-auto rounded-full mb-2" alt="Profile Picture"
                        width="80" height="80">
                    <h2 class="text-sm font-semibold">{{ Auth::user()->name }}</h2>
                    <p class="text-xs text-gray-600">{{ Auth::user()->email }}</p>
                    <div class="mt-2">
                        <p class="text-xs text-gray-600">Following: 100</p>
                        <p class="text-xs text-gray-600">Followers: 500</p>
                        <p class="text-xs text-gray-600">Insert Your Bio Here</p>
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
            <div class="flex flex-col gap-3 px-4 mt-2">
                <button
                    class="btn hover:text-white hover:bg-blue-600 hover:ring-blue-600 rounded-lg w-full p-4 flex justify-start gap-3 ring-2 ring-black ring-inset"
                    onclick="my_modal_4.showModal()">Edit Profile</button>
                <dialog id="my_modal_4" class="modal">
                    <div class="modal-box flex justify-center mt-20 px-10">
                        <form class="max-w-2xl bg-white p-8 rounded-lg">
                            <div class="p-4">
                                <div class="mb-4 text-center">
                                    <img src="https://via.placeholder.com/80" class="mx-auto rounded-full mb-2"
                                        alt="Profile Picture" width="100" height="100">
                                    <h2 class="text-xl font-semibold">{{ Auth::user()->name }}</h2>
                                    <p class="text-sm text-gray-600">{{ Auth::user()->email }}</p>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-600">Following: 100</p>
                                        <p class="text-sm text-gray-600">Followers: 500</p>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="w-full">
                                    <label class="text-gray-600 dark:text-gray-400">Change User Name</label>
                                    <input
                                        class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:border-slate-500
                                            focus:ring focus:ring-slate-500"
                                        type="text">
                                </div>
                                <div class="w-full">
                                    <label class="text-gray-600 dark:text-gray-400">Email</label>
                                    <input
                                        class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:border-slate-500
                                            focus:ring focus:ring-slate-500"
                                        type="text">
                                </div>
                                <div class="w-full">
                                    <label class="text-gray-600 dark:text-gray-400">Bio</label>
                                    <textarea
                                        class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:border-slate-500
                                            focus:ring focus:ring-slate-500"
                                        name="bio"></textarea>
                                </div>
                                <div class="flex justify-end">
                                    <button
                                        class="px-6 py-3 text-white bg-violet-700 rounded-md hover:bg-violet-500
                                            focus:outline-none focus:ring focus:ring-violet-500"
                                        type="submit">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </dialog>
            </div>
        </div>

        <div class="w-5/6 p-4">
            <div class="tweet-card border rounded-lg p-4 bg-white mb-4">
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
            </div>
        </div>
    </div>
</body>

</html>
