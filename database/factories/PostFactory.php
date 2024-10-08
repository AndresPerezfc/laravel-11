<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'slug' => $this->faker->slug(),
            'content' => fake()->text(150),
            'category' => $this->faker->randomElement(['Technology', 'Health', 'Lifestyle', 'Education', 'Entertainment']),
        ];
    }
}
