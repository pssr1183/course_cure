<?php

use App\Models\Course;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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

Route::get('/', function () {
    $courses = Course::all();
    return view('welcome',['courses'=>$courses]);
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
//     ])->group(function () {
//         Route::get('/dashboard', function () {
//             return view('dashboard');
//         })->name('dashboard');
//     });
    
    Route::post('/create-course',[CourseController::class, 'createCourse']);