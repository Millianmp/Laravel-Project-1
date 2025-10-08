<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    public function definition(): array
    {
        $mapel = [
            'Matematika',
            'Bahasa Indonesia',
            'Bahasa Inggris',
            'Pendidikan Pancasila',
            'Produktif RPL'
        ];

        return [
            'nama_mapel' => $this->faker->unique()->randomElement($mapel),
            'kode_mapel' => strtoupper($this->faker->bothify('MPL###')),
            'deskripsi' => $this->faker->sentence(8),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
