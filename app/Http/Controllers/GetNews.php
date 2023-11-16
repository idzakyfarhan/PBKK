<?php

namespace App\Http\Controllers;

use App\Jobs\DispatchNews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetNews extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        DispatchNews::dispatch();

        return response()->json(['message' => 'job running in background']);
    }
}


