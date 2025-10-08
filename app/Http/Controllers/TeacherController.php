<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        // ambil semua data guru dari database
        $teachers = Teacher::all();

        // kirim ke view
        return view('teacher', compact('teachers'));
    }
}
