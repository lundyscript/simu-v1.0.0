<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nisn' => $this->faker->randomNumber(9, true),
            'nama' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'tempatlahir' => $this->faker->city(),
            'tanggallahir' => $this->faker->date(),
            'usia' => $this->faker->numberBetween(3, 5),
            'jk' => $this->faker->randomElement(['L', 'P']),
            'alamat' => $this->faker->streetAddress(),
            'status' => $this->faker->randomElement(['Aktif', 'Lulus'])
        ];
    }
}
