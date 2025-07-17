<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/courses', function () {
    return view('courses');
})->name('courses');


Route::get('/users', function () {
    return view('users');
})->name('users');


// Uncomment the following lines if you want to use the CourseController for storing courses
/* 
Route::post('/courses',function(){
    return redirect('/dashboard');
});
*/

Route::get('/users', [UserController::class, 'users'])
    ->middleware(['auth', 'verified'])
    ->name('users');

    
Route::post('/courses', [CourseController::class, 'store']) -> name('courses.store');

require __DIR__.'/auth.php';

