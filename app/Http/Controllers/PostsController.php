<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Likes;
use Illuminate\Http\Request;
use App\Events\PostCreated;
use App\Events\PostUpdated;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::with('user')->latest()->get();
        return view('home', compact('posts'));
    }

    public function update(Request $request, Posts $post)
    {
        $incomingFields = $request->validate([
            'message_post' => ['required'],
        ]);

        $post->update($incomingFields);

        event(new PostUpdated($post));

        session()->flash('notification', 'Post updated successfully!');

        return back();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $incomingFields = $request->validate([
            'message_post' => ['required'],
        ]);
        $incomingFields['like_post'] = 0;
        $incomingFields['user_id'] = auth()->id();

        $post = Posts::create($incomingFields);

        event(new PostCreated($post));
        session()->flash('notification', 'Post created successfully!');

        return back();
    }

    public function show(Posts $posts)
    {
        //
    }

    public function edit(Posts $posts)
    {
        //
    }

    public function destroy(Posts $posts)
    {
        //
    }

    public function updateLikesCount(Posts $post)
    {
        $likesCount = Likes::where('post_id', $post->id)->count();
        $post->update(['like_post' => $likesCount]);

        return back()->with('notification', 'Likes count updated successfully!');
    }
}
