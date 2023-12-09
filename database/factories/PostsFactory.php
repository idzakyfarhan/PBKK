<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Posts;

class PostsFactory extends Factory
{
    protected $model = Posts::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'message_post' => $this->faker->sentence,
            'like_post' => 0,
            'comment_post' => 0,
            'bookmark_post' => 0,
            'user_id' => User::factory(),
        ];
    }
}
