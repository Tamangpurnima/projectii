<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseDetailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QualificationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

//CourseType Part

Route::get('Course', [CourseController::class, 'index']);


Route::get('/', function () {
    return view('Course');
});



Route::get('course/add', function(){
    return view('Course');
});


Route::post('course/store', [CourseController::class,'store']);
Route::get('course/show', [CourseController::class, 'show'])->name('course.show');
Route::get('course/delete/{id}',[CourseController::class,'destroy']);
Route::get('course/edit/{id}',[CourseController::class,'edit']);
Route::post('course/update/{id}',[CourseController::class,'update']);


//college part


Route::get('CollegeAdd', [CollegeController::class, 'index']);

Route::get('/', function () {
    return view('CollegeAdd');
});

Route::get('college/add', function(){
    return view('CollegeAdd');
});

Route::post('college/store',[CollegeController::class,'store']);
Route::get('college/show',[CollegeController::class,'show'])->name('college.show');
Route::get('college/delete/{id}',[CollegeController::class,'destroy']);
Route::get('college/edit/{id}',[CollegeController::class,'edit']);
Route::post('college/update/{id}',[CollegeController::class,'update']);


//CourseDetail

Route::get('CourseDetail', [CouresDetailController::class, 'index']);

Route::get('/', function () {
    return view('CourseDetail');
});

Route::get('coursedetail/add', function(){
    return view('CourseDetail');
});

Route::post('coursedetail/store',[CourseDetailController::class,'store']);
Route::get('coursedetail/show',[CourseDetailController::class,'show'])->name('coursedetail.show');
Route::get('coursedetail/delete/{id}',[CourseDetailController::class,'destroy']);
Route::get('coursedetail/edit/{id}',[CourseDetailController::class,'edit']);
Route::post('coursedetail/update/{id}',[CourseDetailController::class,'update']);


//Qualification

Route::get('/', function () {
    return view('Qualification');
});

Route::post('qualification/store',[QualificationController::class,'store']);
Route::get('qualification/show',[QualificationController::class,'show']);//->name('coursedetail.show');
Route::get('qualification/delete/{id}',[QualificationController::class,'destroy']);
Route::get('qualification/edit/{id}',[QualificationController::class,'edit']);
// Route::post('qualification/update/{id}',[QualificationController::class,'update']);



//Adminpanel
Route::get('dashboard',[AdminController::class,'index']);