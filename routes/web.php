<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentCourseController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});

Route::any('/add-student' , [StudentController::class, 'create']);
Route::get('/display-student',[StudentController::class, 'index']); 
Route::get('/delete-student/{id}',[StudentController::class, 'destroy']); 
Route::get('/edit-student/{id}',[StudentController::class, 'edit']); 
Route::get('/view/-student',[StudentController::class, 'show']); 
Route::any('student/toggleStatus', [StudentController::class,'toggleStatus']);
    
Route::any('/add-course',[CourseController::class, 'create']);
Route::any('/display-course',[CourseController::class, 'index']);
Route::any('/delete-course/{id}',[CourseController::class, 'destroy']);
Route::any('/edit-course/{id}',[CourseController::class, 'edit']);
Route::any('/view-course/{id}',[CourseController::class, 'show']);
Route::any('course/toggleStatus',[CourseController::class, 'toggleStatus']);

   
Route::get('register',[UserController::class,'add']);
Route::post('register',[UserController::class,'store']);  
Route::any('login',[UserController::class,'login'])->name('login');

Route::group(['middleware' => 'loginValidatorMiddleware'],function(){
Route::get('logout',[UserController::class,'logout']);


Route::get('', function () {
    return view('index');
});

Route::get('add-student-course',[StudentCourseController::class,'add'])->name('addstudentcourse');
Route::post('add-student-course',[StudentCourseController::class,'store'])->name('storestudentcourse');
Route::any('display-student-course',[StudentCourseController::class,'index'])->name('displaystudentcourse');
});