<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tags = ["development", "fun", "entertainment", "marketing"];
        return [
            'title' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'user_id' => $this->faker->numberBetween(1,5),
            'time_to_read' => $this->faker->numberBetween(10,60) ,
            'cover_image' => "https://picsum.photos/300/300",
            'cover_image_caption' => $this->faker->sentence,
            'blog_body' => $this->faker->paragraph,
            'tags' => $this->faker->randomElement($tags),

        ];
    }
}
//
