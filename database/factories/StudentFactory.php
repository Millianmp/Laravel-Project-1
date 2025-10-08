<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'    => $this->faker->name(),
            'grade'   => $this->faker->randomElement([
                'XI PPLG 1', 
                'XI PPLG 2', 
                'XI PPLG 3'
            ]),
            'classroom_id' => Classroom::factory(),
            'birthday'=> $this->faker->date('Y-m-d', '2010-12-31'),
            'absence' => $this->faker->numberBetween(0, 30),
            'email'   => $this->faker->unique()->safeEmail(),
            'address' => $this->faker->address(),           
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}