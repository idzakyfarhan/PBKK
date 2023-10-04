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
    <script>
        function addToOrderedList() {
            var input = document.getElementById("myInput");
            var value = input.value;
            var ol = document.getElementById("myList");
            var li = document.createElement("li");
            var p = document.createElement("p");
            li.classList.add("flex", "justify-between", "my-2");
            p.appendChild(document.createTextNode(value));
            li.appendChild(p);

            var deleteButton = document.createElement("button");
            deleteButton.classList.add("text-red-500", "font-bold", "opacity-0", "hover:opacity-100");
            deleteButton.appendChild(document.createTextNode("Delete"));
            deleteButton.onclick = function() {
                ol.removeChild(li);
            };
            li.appendChild(deleteButton);

            ol.appendChild(li);
            input.value = ""; // Reset input
        }


        function toggleStrikethrough(event) {
            if (event.target.tagName === "P") {
                event.target.classList.toggle("strikethrough");
            }
        }
    </script>
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-row sm:justify-between items-center pt-6 sm:pt-0">
        <div class="bg-purple-400 w-[50%] h-screen flex flex-col justify-center items-center">
            <h1 class="font-italic font-bold text-2xl py-5">
                Assigment Pre FP
            </h1>
            <div class="flex justify-center">
                <div class="w-fit h-fit bg-white p-10 flex-col justify-center items-start rounded-md">
                    <h1 class="text-xl font-bold mb-3">
                        Reminder
                    </h1>
                    <form>
                        <ol id="myList" class="list-disc" onclick="toggleStrikethrough(event)"></ol>
                        <input type="text" id="myInput"
                            class="w-full px-2 py-4 rounded-md border-blue-300 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Your To-do list">
                        <button onclick="addToOrderedList()" type="submit"
                            class="border-2 border-black font-bold rounded-lg w-full py-2 mt-3">
                            SUBMIT
                        </button>
                    </form>

                </div>
            </div>
        </div>

        <div class="bg-purple-100 w-[50%] h-screen flex flex-col justify-center items-center">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
