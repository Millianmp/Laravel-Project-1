<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // 🧾 Tampilkan semua siswa (untuk TailwindPages.Student)
    public function index()
    {
        $students = Student::with('classroom')->get();

        foreach ($students as $student) {
            $student->kelas = $student->classroom->name ?? 'Belum ada kelas';
        }

        return view('TailwindPages.Student', compact('students'));
    }

    // 🧍‍♂️ Form tambah siswa (admin) + fitur cari siswa berdasarkan ID
    public function create(Request $request)
    {
        $classrooms = Classroom::all();

        // Ambil semua student untuk tabel
        $students = Student::with('classroom')->get();

        // Jika ada parameter ID dari form cari
        $student = null;
        if ($request->has('id')) {
            $student = Student::with('classroom')->find($request->id);
        }

        return view('components.admin.Student', compact('classrooms', 'students', 'student'));
    }

    // 💾 Simpan data siswa baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'classroom_id' => 'required|integer',
            'birthday' => 'required|date',
            'absence' => 'required|integer',
            'email' => 'nullable|email|unique:students,email',
            'address' => 'nullable|string',
        ]);

        Student::create($request->all());

        return redirect()->route('admin.student.create')->with('success', '✅ Data siswa berhasil ditambahkan!');
    }

    // 🗑️ Hapus data siswa
    public function destroy($id)
    {
        $student = Student::find($id);

        if ($student) {
            $student->delete();
            return redirect()->route('admin.student.create')->with('success', '✅ Data siswa berhasil dihapus!');
        }

        return redirect()->route('admin.student.create')->with('error', '❌ Data siswa tidak ditemukan!');
    }
}
