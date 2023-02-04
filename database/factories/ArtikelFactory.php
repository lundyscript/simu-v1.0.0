<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artikel>
 */
class ArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1, 3),
            'kategori_id' => mt_rand(1, 2),
            'status_id' => mt_rand(1, 2),
            'judul' => $this->faker->sentence(10),
            'slug' => $this->faker->slug(),
            'kutipan' => $this->faker->paragraph(),
            'isiartikel' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ];
    }
}
