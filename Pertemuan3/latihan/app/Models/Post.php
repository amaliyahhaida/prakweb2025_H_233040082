<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        // Mendapatkan judul (title) untuk digunakan dalam slug
        $title = fake()->sentence(4);

        return [
            // Foreign Key: Secara otomatis membuat user baru jika tidak ditentukan
            'user_id' => \App\Models\User::factory(),

            // Foreign Key: Secara otomatis membuat category baru jika tidak ditentukan
            'category_id' => \App\Models\Category::factory(),

            // Judul Post
            'title' => $title,

            // Slug (versi ramah URL dari judul)
            'slug' => Str::slug($title),

            // Ringkasan Post (paragraf tunggal)
            'excerpt' => fake()->paragraph(),

            // Isi utama Post (3 paragraf, dikonversi menjadi string)
            'body' => fake()->paragraphs(3, true),

            // Kolom image, disetel ke null (boleh kosong)
            'image' => null,
        ];
    }
}
