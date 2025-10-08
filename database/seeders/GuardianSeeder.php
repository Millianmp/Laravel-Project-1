<?php

namespace Database\Seeders;

use App\Models\Guardian;
use Illuminate\Database\Seeder;

class GuardianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Guardian::factory(10)->create();

      Guardian::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}