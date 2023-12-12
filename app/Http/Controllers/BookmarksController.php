<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Bookmarks;
use Illuminate\Support\Facades\Auth;

class BookmarksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $userId = auth()->id();

        $bookmarkedPosts = $user->bookmarks()->where('user_id', $userId)->get();
        $postIds = $bookmarkedPosts->pluck('post_id');
        $posts = Posts::whereIn('id', $postIds)->get();

        return view('bookmarks', compact('posts'))->with('user', $user);
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
    public function store($id)
    {
        $userId = auth()->id();
        $post = Posts::findOrFail($id);

        if (!$post->bookmarks()->where('user_id', $userId)->exists()) {
            $incomingFields['user_id'] = $userId;
            $incomingFields['post_id'] = $id;

            Bookmarks::create($incomingFields);
        } else {
            $post->bookmarks()->where('user_id', $userId)->delete();
        }

        $postsController = new PostsController();
        $postsController->updateBookmarksCount($post);

        session()->flash('notification', 'You Bookmark a Post!');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
