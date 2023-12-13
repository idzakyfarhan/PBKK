<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function index($id)
    {
        $user = Auth::user();
        $post = Posts::findOrFail($id);
        $comments = Comments::with('user')->where('post_id', $post->id)->latest()->get();

        return view('comments', compact('post', 'user', 'comments'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request, $id)
    {
        $post = Posts::findOrFail($id);

        $incomingFields = $request->validate([
            'comment' => ['required'],
        ]);
        $incomingFields['user_id'] = auth()->id();
        $incomingFields['post_id'] = $id;

        Comments::create($incomingFields);

        $postsController = new PostsController();

        $postsController->updateCommentsCount($post);
        session()->flash('notification', 'Your comment has been added!');

        return back();
    }

    public function show(Comments $comments)
    {
        dd($comments);
    }

    public function edit(Comments $comments)
    {
        //
    }

    public function update(Request $request, Comments $comments)
    {
        //
    }

    public function destroy(Comments $comments)
    {
        //
    }
}
