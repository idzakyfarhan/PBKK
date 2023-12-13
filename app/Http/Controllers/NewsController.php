<?php

namespace App\Http\Controllers;

use App\Jobs\DispatchNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\News;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        DispatchNews::dispatch();
        $user = Auth::user();
        $news = News::paginate(15);
        return view('news', compact('news', 'user'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(News $news)
    {
        dd($news);
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
