<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="w-full max-w-md p-4 bg-white shadow-md rounded-md">
        <h4 class="text-2xl font-semibold mb-4 text-center">Login</h4>
        <form>
            <div class="mb-4">
                <label for="username" class="block text-gray-600 font-semibold mb-2">Username</label>
                <input type="text" id="username" name="username"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Enter your username">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-600 font-semibold mb-2">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Enter your email">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-600 font-semibold mb-2">Password</label>
                <input type="password" id="password" name="password"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Enter your password">
            </div>

            <button type="submit"
                class="w-full px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white font-semibold rounded-md">Login</button>
        </form>

        <p class="mt-4 text-center text-gray-500">Don't have an account? <a href="/register" class="text-blue-500">Register
                here</a></p>
    </div>
</body>

</html>
