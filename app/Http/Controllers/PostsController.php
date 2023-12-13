<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Likes;
use App\Models\Bookmarks;
use Illuminate\Http\Request;
use App\Events\PostCreated;
use App\Events\PostUpdated;
use App\Models\Comments;

class PostsController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $posts = Posts::with('user')->latest();

        if (request()->has('search')) {
            $searchTerm = request()->get('search');
            $posts->where(function ($query) use ($searchTerm) {
                $query->where('message_post', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhereHas('user', function ($userQuery) use ($searchTerm) {
                        $userQuery->where('name', 'LIKE', '%' . $searchTerm . '%');
                    });
            });
        }

        $posts = $posts->get();

        return view('home', compact('posts', 'user'));
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
        $incomingFields['comment_post'] = 0;
        $incomingFields['bookmark_post'] = 0;
        $incomingFields['user_id'] = auth()->id();

        $post = Posts::create($incomingFields);

        event(new PostCreated($post));
        session()->flash('notification', 'Post created successfully!');

        return back();
    }

    public function show(Posts $posts)
    {
        dd($posts);
    }

    public function edit(Posts $posts)
    {
        //
    }

    public function destroy($id)
    {
        $post = Posts::find($id);
        if (auth()->user()->id !== $post->user_id) {
            abort(403, 'Unauthorized action.');
        }

        $post->likes()->delete();
        $post->bookmarks()->delete();
        $post->delete();

        session()->flash('notification', 'Post deleted successfully!');

        return back();
    }

    public function updateLikesCount(Posts $post)
    {
        $likesCount = Likes::where('post_id', $post->id)->count();
        $post->update(['like_post' => $likesCount]);

        return back()->with('notification', 'Likes updated successfully!');
    }

    public function updateBookmarksCount(Posts $post)
    {
        $bookmarksCount = Bookmarks::where('post_id', $post->id)->count();
        $post->update(['bookmark_post' => $bookmarksCount]);

        return back();
    }

    public function updateCommentsCount(Posts $post)
    {
        $bookmarksCount = Comments::where('post_id', $post->id)->count();
        $post->update(['comment_post' => $bookmarksCount]);

        return back();
    }
}
