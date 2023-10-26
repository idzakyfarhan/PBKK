<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">
<div class="flex justify-center mt-20 px-10">
    <form class="max-w-2xl bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl text-gray-600 dark:text-gray-300 pb-4">Edit Profile:</h2>

        <div class="space-y-4">
            <div class="w-full">
                <label class="text-gray-600 dark:text-gray-400">User Name</label>
                <input
                    class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:border-slate-500 focus:ring focus:ring-slate-500"
                    type="text">
            </div>

            <div class="w-full">
                <label class="text-gray-600 dark:text-gray-400">Email</label>
                <input
                    class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:border-slate-500 focus:ring focus:ring-slate-500"
                    type="text">
            </div>

            <div class="w-full">
                <label class="text-gray-600 dark:text-gray-400">Bio</label>
                <textarea
                    class="w-full px-4 py-2 rounded-lg border focus:outline-none focus:border-slate-500 focus:ring focus:ring-slate-500"
                    name="bio"></textarea>
            </div>

            <div class="flex justify-end">
                <button
                    class="px-6 py-3 text-white bg-violet-700 rounded-md hover:bg-violet-500 focus:outline-none focus:ring focus:ring-violet-500"
                    type="submit">Save Changes</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
