<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Bookmarks;
use Illuminate\Support\Facades\Auth;

class BookmarksController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userId = auth()->id();

        $bookmarkedPosts = $user->bookmarks()->where('user_id', $userId)->get();
        $postIds = $bookmarkedPosts->pluck('post_id');
        $posts = Posts::whereIn('id', $postIds)->get();

        return view('bookmarks', compact('posts'))->with('user', $user);
    }

    public function create()
    {
        //
    }

    public function store($id)
    {
        $userId = auth()->id();
        $post = Posts::findOrFail($id);

        if (!$post->bookmarks()->where('user_id', $userId)->exists()) {
            $incomingFields['user_id'] = $userId;
            $incomingFields['post_id'] = $id;

            Bookmarks::create($incomingFields);
            $postsController = new PostsController();
            $postsController->updateBookmarksCount($post);
            session()->flash('notification', 'You Bookmark a Post!');
        } else {
            $post->bookmarks()->where('user_id', $userId)->delete();
            $postsController = new PostsController();
            $postsController->updateBookmarksCount($post);
            session()->flash('alert', 'You remove a post from your bookmark!');
        }

        return back();
    }

    public function show(Bookmarks $bookmarks)
    {
        dd($bookmarks);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
