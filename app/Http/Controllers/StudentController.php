<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('classroom')->get();

        foreach ($students as $student) {
        $student->kelas = $student->classroom->name;
    }
return view('student', compact('students'));

    }
}
