<div class="w-1/6 bg-white h-screen border-r border-gray-200 overflow-hidden sticky left-0 top-0 bottom-0">
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

        <div class="text-center">
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
    <div class="px-4 absolute bottom-0 mb-10 w-full">
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
