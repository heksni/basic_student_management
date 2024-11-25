<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('/students',StudentController::class);

Route::get('/teachers',[TeacherController::class,'index']);
Route::get('/teachers/create',[TeacherController::class,'create']);
Route::post('/teachers',[TeacherController::class,'store']);
Route::get('/teachers/{teacher}/edit',[TeacherController::class,'edit']);
Route::patch('/teachers/{teacher}',[TeacherController::class,'update']);
Route::delete('/teachers/{teacher}',[TeacherController::class,'destroy']);


Route::get('/courses',[CourseController::class,'index']);
Route::get('/courses/create',[CourseController::class,'create']);
Route::post('/courses',[CourseController::class,'store']);
Route::get('/courses/{course}/edit',[CourseController::class,'edit']);
Route::patch('/courses/{course}',[CourseController::class,'update']);
Route::delete('/courses/{course}',[CourseController::class,'destroy']);