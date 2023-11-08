<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter-like Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Override Tailwind classes for the purpose of this example */
        .tweet-card {
            border-color: #1da1f2;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/6 bg-white h-screen border-r border-gray-200">
            <div class="p-4">
                <!-- Profile Section -->
                <div class="mb-4 text-center">
                    <img src="https://via.placeholder.com/80" class="mx-auto rounded-full mb-2" alt="Profile Picture" width="80" height="80">
                    <h2 class="text-sm font-semibold">Dzaky Farhan</h2>
                    <p class="text-xs text-gray-600">@dzakyyfr</p>
                    <div class="mt-2">
                        <p class="text-xs text-gray-600">Following: 100</p>
                        <p class="text-xs text-gray-600">Followers: 500</p>
                    </div>
                </div>

                <div class="text-center ">
                    <ul>
                        <li class="text-sm mb-2"><a href="#" class="text-blue-500 hover:underline">Home</a></li>
                        <li class="text-sm mb-2"><a href="#" class="text-blue-500 hover:underline">Bookmarks</a></li>
                        <li class="text-sm mb-2"><a href="#" class="text-blue-500 hover:underline">Profile</a></li>
                    </ul>
                </div>
            </div>
            <div class="absolute bottom-0 h-16 w-16 ml-16">
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    Logout
                </button>
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
