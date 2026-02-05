<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        $judul = fake()->sentence(rand(6,8));
        return [
            //
            'judul' => $judul,
            'penulis_id' => User::factory(),
            'category_id' => Category::factory(),
            'artikel' => fake()->text(),
            'slug' => Str::slug($judul)
        ];
    }
}
