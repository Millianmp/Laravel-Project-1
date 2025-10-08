<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;


Route::get('/', function () {
    return view('welcome', [
        'title' => 'Home'
    ]);
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/guardians', [GuardianController::class, 'index']);
Route::get('/classroom', [ClassroomController::class, 'index']);
Route::resource('student', StudentController::class);
Route::resource('teacher', TeacherController::class);
Route::resource('subject', SubjectController::class);

