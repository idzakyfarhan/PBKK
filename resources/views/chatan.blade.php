@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
@section('content')

<div class="chat bg-gray-100 rounded-lg overflow-hidden shadow-md max-w-lg mx-auto my-8">


  <div class="messages p-4">
    <div class="left message flex items-start">
      <p>Start chatting with Ecky AI below!!</p>
    </div>
  </div>

  <div class="bottom p-4">
    <form class="flex">
      <input type="text" id="message" name="message" placeholder="Enter message..." autocomplete="off" class="flex-1 px-4 py-2 border rounded-full focus:outline-none focus:ring focus:border-blue-300">
      <button type="submit" class="ml-2 px-4 py-2 text-white bg-white rounded-full hover:bg-grey-600" >
        <img src="/icon/send.svg" width="15" alt="" />
      </button>
    </form>
  </div>

</div>

<script>
  //Broadcast messages
  $("form").submit(function (event) {
    event.preventDefault();

    //Stop empty messages
    if ($("form #message").val().trim() === '') {
      return;
    }

    //Disable form
    $("form #message").prop('disabled', true);
    $("form button").prop('disabled', true);

    $.ajax({
      url: "/chat",
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': "{{csrf_token()}}"
      },
      data: {
        "model": "gpt-3.5-turbo",
        "content": $("form #message").val()
      }
    }).done(function (res) {

      //Populate sending message
      $(".messages > .message").last().after('<div class="right message">' +
        '<p>' + $("form #message").val() + '</p>' +
        '</div>');

      //Populate receiving message
      $(".messages > .message").last().after('<div class="left message">' +
        '<p>' + res + '</p>' + 
        '</div>');

      //Cleanup
      $("form #message").val('');
      $(document).scrollTop($(document).height());

      //Enable form
      $("form #message").prop('disabled', false);
      $("form button").prop('disabled', false);
    });
  });

</script>

@endsection
