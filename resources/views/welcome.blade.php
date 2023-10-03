<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
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
      li.appendChild(document.createTextNode(value));
      
      var deleteButton = document.createElement("button");
      deleteButton.classList.add("text-red-500", "font-bold", "opacity-0", "hover:opacity-100");
      deleteButton.appendChild(document.createTextNode("Delete"));
      deleteButton.onclick = function() {
        ol.removeChild(li);
      };
      li.appendChild(deleteButton);
      
      ol.appendChild(li);
      input.value = "";
    }
    
    function toggleStrikethrough(event) {
      if (event.target.tagName === "LI") {
        event.target.classList.toggle("strikethrough");
      }
    }
  </script>
</head>
<body>
  <h1 class="text-xl font-bold underline">
    Reminder
  </h1>
  <div class="flex justify-center h-screen">
  <div class="w-100 h-80 bg-blue-200 p-10 flex-col justify-center items-start rounded-md">
      <ol id="myList" class="list-disc" onclick="toggleStrikethrough(event)"></ol>
      <input type="text" id="myInput" class="w-full px-2 py-4 rounded-md border-blue-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Type your text here">
      <button onclick="addToOrderedList()">Submit</button>
  </div>
</body>
</html>