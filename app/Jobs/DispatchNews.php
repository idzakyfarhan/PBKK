<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class DispatchNews implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        try {
            $response = Http::withoutVerifying()->get('https://newsapi.org/v2/top-headlines?country=id&apiKey=348ee627dc6b4c1fabd3bc4ef6131e69');

            if ($response->successful()) {
                $bodyJson = $response->json();
                // DB::table('news')->insert($bodyJson['articles']);
                $selectedFields = array_map(function ($article) {
                    return [
                        'author' => $article['author'],
                        'title' => $article['title'],
                        'description' => $article['description'],
                    ];
                }, $bodyJson['articles']);

                DB::table('news')->insert($selectedFields);
            } else {
                logger()->error('Failed to fetch news articles. HTTP status: ' . $response->status());
            }
        } catch (\Exception $e) {
            logger()->error('Exception occurred: ' . $e->getMessage());
        }
    }
}
