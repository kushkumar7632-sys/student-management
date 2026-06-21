<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Admin dashboard
use App\Models\Student;
use App\Models\Course;
use App\Models\Attendance;
use App\Models\Mark;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {

//     $students = Student::count();
//     $courses = Course::count();
//     $attendance = Attendance::count();
//     $marks = Mark::count();

//     return view('dashboard', compact(
//         'students',
//         'courses',
//         'attendance',
//         'marks'
//     ));

// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/students/search', [StudentController::class, 'search'])->name('students.search');
    Route::resource('students', StudentController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('attendance',AttendanceController::class);
    Route::resource('marks', MarkController::class);
    // Route::get('/students/search', [StudentController::class, 'search'])->name('students.search');
});

require __DIR__.'/auth.php';
