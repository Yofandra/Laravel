<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentences;
        $slug = Str::slug($title);
        return [
            'title' => $title,
            'slug' => $slug,
            'content' => $this->faker->realText(),
            'draft' => random_int(0, 1),
        ];
    }
}
