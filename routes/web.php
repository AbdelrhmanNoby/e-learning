<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CatController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\TrainerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\MessageController;
use App\Http\Controllers\Front\SettingeController;
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

Route::get('/', [HomeController::class,'index'])->name('front.home');
Route::get('/category/{id}', [CourseController::class,'category'])->name('front.category');
Route::get('/category/{id}/course/{c_id}', [CourseController::class,'show'])->name('front.course');
Route::get('/contact', [SettingeController::class,'index'])->name('front.contact');

Route::post('/message/newsletter', [MessageController::class,'newsletter'])->name('front.message.newsletter');
Route::post('/message/contact', [MessageController::class,'contact'])->name('front.message.contact');
Route::post('/message/enroll', [MessageController::class,'enroll'])->name('front.message.enroll');



Route::get('/dashboard/login', [AuthController::class,'login'])->name('admin.auth.login');

Route::post('/dashboard/do_login', [AuthController::class,'do_login'])->name('admin.auth.do_login');


Route::middleware('is_admin:admin')->group(function(){
    Route::get('/dashboard', [AdminHomeController::class,'index'])->name('admin.home');
    Route::get('/dashboard/cats', [CatController::class,'index'])->name('admin.cats.index');
    Route::get('/dashboard/logout', [AuthController::class,'logout'])->name('admin.auth.logout');
    Route::get('/dashboard/cats/create', [CatController::class,'create'])->name('admin.cats.create');
    Route::post('/dashboard/cats/store', [CatController::class,'store'])->name('admin.cats.store');
    Route::get('/dashboard/cats/edit/{id}', [CatController::class,'edit'])->name('admin.cats.edit');
    Route::post('/dashboard/cats/update', [CatController::class,'update'])->name('admin.cats.update');
    Route::get('/dashboard/cats/delete/{id}', [CatController::class,'delete'])->name('admin.cats.delete');
 // trainer
    Route::get('/dashboard/trainer', [TrainerController::class,'index'])->name('admin.trainers.index');
    Route::get('/dashboard/trainer/create', [TrainerController::class,'create'])->name('admin.trainers.create');
    Route::post('/dashboard/trainer/store', [TrainerController::class,'store'])->name('admin.trainers.store');
    Route::get('/dashboard/trainer/edit/{id}', [TrainerController::class,'edit'])->name('admin.trainers.edit');
    Route::post('/dashboard/trainer/update', [TrainerController::class,'update'])->name('admin.trainers.update');
    Route::get('/dashboard/trainer/delete/{id}', [TrainerController::class,'delete'])->name('admin.trainers.delete');
 // courses
    Route::get('/dashboard/course', [AdminCourseController::class,'index'])->name('admin.courses.index');
    Route::get('/dashboard/course/create', [AdminCourseController::class,'create'])->name('admin.courses.create');
    Route::post('/dashboard/course/store', [AdminCourseController::class,'store'])->name('admin.courses.store');
    Route::get('/dashboard/course/edit/{id}', [AdminCourseController::class,'edit'])->name('admin.courses.edit');
    Route::post('/dashboard/course/update', [AdminCourseController::class,'update'])->name('admin.courses.update');
    Route::get('/dashboard/course/delete/{id}', [AdminCourseController::class,'delete'])->name('admin.courses.delete');
 // students
 Route::get('/dashboard/students', [StudentController::class,'index'])->name('admin.students.index');
 Route::get('/dashboard/students/create', [StudentController::class,'create'])->name('admin.students.create');
 Route::post('/dashboard/students/store', [StudentController::class,'store'])->name('admin.students.store');
 Route::get('/dashboard/students/edit/{id}', [StudentController::class,'edit'])->name('admin.students.edit');
 Route::post('/dashboard/students/update', [StudentController::class,'update'])->name('admin.students.update');
 Route::get('/dashboard/students/delete/{id}', [StudentController::class,'delete'])->name('admin.students.delete');
 Route::get('/dashboard/students/showCourses/{id}', [StudentController::class,'showCourses'])->name('admin.students.showCourses');
 Route::get('/dashboard/{id}/approve/{c_id}', [StudentController::class,'approve'])->name('admin.students.approve');
 Route::get('/dashboard/{id}/reject/{c_id}', [StudentController::class,'reject'])->name('admin.students.reject');

});

