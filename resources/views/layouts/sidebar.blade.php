<div class="bg-white h-screen border-r border-gray-200 overflow-hidden sticky left-0 top-0 bottom-0">
    <div class="p-4">
        <div class="mb-4 text-center">
            <img src="https://via.placeholder.com/80" class="mx-auto rounded-full mb-2" alt="Profile Picture" width="80"
                height="80">
            <h2 class="text-sm font-semibold">{{ Auth::user()->name }}</h2>
            <p class="text-xs text-gray-600">{{ Auth::user()->email }}</p>
        </div>

        <div class="text-center">
            <ul>
                <a href="/home">
                    <li
                        class="text-sm text-black mb-2 hover:bg-[#2AA9E0] hover:text-white rounded-lg w-full p-4 flex justify-start gap-3">
                        <img src="/icon/home.svg" width="15" alt="" />
                        <p href="#" class="font-bold">Home</p>
                    </li>
                </a>
                <a href="/bookmarks">
                    <li
                        class="text-sm text-black mb-2 hover:bg-[#2AA9E0] hover:text-white rounded-lg w-full p-4 flex justify-start gap-3">
                        <img src="/icon/bookmark.svg" width="15" alt="" />
                        <p href="#" class="font-bold">Bookmarks</p>
                    </li>
                </a>
                <a href="/profile">
                    <li
                        class="text-sm text-black mb-2 hover:bg-[#2AA9E0] hover:text-white rounded-lg w-full p-4 flex justify-start gap-3">
                        <img src="/icon/user.svg" width="15" alt="" />
                        <p href="/profile" class="font-bold">Profile</p>
                    </li>
                </a>
                <a href="/news">
                    <li
                        class="text-sm text-black mb-2 hover:bg-[#2AA9E0] hover:text-white rounded-lg w-full p-4 flex justify-start gap-3">
                        <img src="/icon/news.svg" width="15" alt="" />
                        <p href="/news" class="font-bold">News</p>
                    </li>
                </a>
            </ul>
        </div>
    </div>



    <div class="px-4 absolute bottom-0 mb-10 w-full flex flex-col gap-2">
        <button
            class="btn hover:text-white hover:bg-blue-600 text-grey-600 hover:ring-blue-600 text-sm rounded-md w-full px-4 py-3 flex justify-start gap-3 ring-2 ring-[#555a64] ring-inset"
            onclick="my_modal_4.showModal()">
            Edit Profile
        </button>

        <form method="POST" action="{{ route('logout') }}"
            class="border-2 border-[#555A64] text-center w-[100%] rounded-md overflow-hidden">
            @csrf
            <x-dropdown-link :textColor="'#000'" :bgColor="'#FFFFFF'" :href="route('logout')"
                onclick="event.preventDefault();
                                    this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </div>

    <dialog id="my_modal_4" class="modal">
        <div class="modal-box flex justify-end mt-2 mr-2">
            <button class="text-gray-600 hover:text-black focus:outline-none" onclick="my_modal_4.close()">X</button>
        </div>
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
                    <div class="flex mr-2 justify-end">
                        <button
                            class="px-6 py-3 text-white bg-blue-700 rounded-md hover:bg-blue-500
                                            focus:outline-none focus:ring focus:ring-violet-500"
                            type="submit">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </dialog>
</div>
