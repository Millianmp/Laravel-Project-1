<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Student::factory(10)->create();

        Student::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}