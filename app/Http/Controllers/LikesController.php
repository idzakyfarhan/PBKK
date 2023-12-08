<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Likes;

class LikesController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store($id)
    {
        $userId = auth()->id();
        $incomingFields['user_id'] = $userId;
        $incomingFields['post_id'] = $id;

        Likes::create($incomingFields);
        $post = Posts::findOrFail($id);

        $postsController = new PostsController();
        $postsController->updateLikesCount($post);

        return back();
    }

    public function show(Likes $likes)
    {
        //
    }

    public function edit(Likes $likes)
    {
        //
    }

    public function update(Request $request, Likes $likes)
    {
        //
    }

    public function destroy(Likes $likes)
    {
        //
    }
}
