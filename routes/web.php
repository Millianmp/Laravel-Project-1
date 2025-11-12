<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\GuardianController;

// ==================== Halaman Umum ====================
Route::get('/', function () {
    return view('welcome', ['title' => 'Home']);
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/guardians', [GuardianController::class, 'index'])->name('guardians');
Route::get('/classroom', [ClassroomController::class, 'index'])->name('classroom');

// ==================== Resource Controller ====================
// CRUD otomatis untuk student, teacher, subject
Route::resource('student', StudentController::class);  // Untuk user biasa
Route::resource('teacher', TeacherController::class);
Route::resource('subject', SubjectController::class);

// ==================== Admin Dashboard ====================
Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('components.admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/guardian', function () {
        return view('components.admin.guardian');
    })->name('admin.guardian');

    Route::get('/subject', function () {
        return view('components.admin.subject');
    })->name('admin.subject');

    Route::get('/teacher', function () {
        return view('components.admin.teacher');
    })->name('admin.teacher');

    Route::get('/classroom', function () {
        return view('components.admin.classroom');
    })->name('admin.classroom');

    // ==================== Admin Student ====================
    // Form tambah student + cari
    Route::get('/student', [StudentController::class, 'create'])->name('admin.student.create');

    // Simpan student baru
    Route::post('/student', [StudentController::class, 'store'])->name('admin.student.store');

    // Tampilkan student berdasarkan ID (misal untuk edit atau hapus)
    Route::get('/student/show', [StudentController::class, 'show'])->name('admin.student.show');

    // Hapus student
    Route::delete('/student/{id}', [StudentController::class, 'destroy'])->name('admin.student.destroy');

});
