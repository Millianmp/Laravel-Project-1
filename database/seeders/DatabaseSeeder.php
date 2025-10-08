<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Classroom;
use App\Models\Guardian;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         

    Guardian::factory(10)->create();
    //   Student::factory(10)->create();
    //   Classroom::factory(3)->create();
    Classroom::factory(4)->hasStudent(5)->create();
    
    Teacher::factory()->count(5)->create();

    Subject::factory()->count(5)->hasTeacher(1)->create();
    }
}