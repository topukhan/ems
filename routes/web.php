<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ExaminerController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('backend.dashboard');
});

Route::resource('/courses',CourseController::class);
Route::resource('/students',StudentController::class);
Route::resource('/examiners',ExaminerController::class);
