<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{   
    /**
     * Define the model's default state.
     *
     * @var string
     */

    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
    {
        return [
            'title' => $this->faker->text(),
            'slug' => Str::slug($this->faker->text()),
            'body' => $this->faker->paragraph()
        ];
    }
}
