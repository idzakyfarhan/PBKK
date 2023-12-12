<div class="bg-white h-screen overflow-hidden sticky left-0 top-0 bottom-0">
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
            class="btn hover:text-white hover:bg-blue-300 text-grey-600 hover:ring-blue-400 text-sm rounded-md w-full px-4 py-3 flex justify-start gap-3 ring-2 ring-[#555a64] ring-inset"
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

    <dialog id="my_modal_4" class="modal rounded-lg">
        <div class="flex flex-col justify-center relative bg-blue-300">
            <button class="bg-blue-300 hover:bg-blue-400 font-medium italic text-white"
                onclick="my_modal_4.close()">close</button>
            <div class="max-w-2xl bg-white p-8 rounded-t-lg">
                <div class="space-y-4">
                    <div class="w-full">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                    <div class="w-full">
                        @include('profile.partials.update-password-form')
                    </div>
                    <div class="w-full">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </dialog>
</div>
