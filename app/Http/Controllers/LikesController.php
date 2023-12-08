<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Likes;

class LikesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $incomingFields['user_id'] = $userId;
        $incomingFields['post_id'] = $id;

        Likes::create($incomingFields);
        $post = Posts::findOrFail($id);

        $postsController = new PostsController();
        $postsController->updateLikesCount($post);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Likes $likes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Likes $likes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Likes $likes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Likes $likes)
    {
        //
    }
}
