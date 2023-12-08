<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Events\PostCreated;
use App\Events\PostUpdated;

class PostsController extends Controller
{

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

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Posts::latest()->get();
        $posts = Posts::with('user')->latest()->get();
        return view('home', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $posts)
    {
        //
    }
}
