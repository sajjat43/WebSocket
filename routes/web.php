<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Route::group(['middleware'=>'verified'],function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/student',[StudentController::class,'studentIndex'])->name('student.index');
    Route::post('/student/store',[StudentController::class,'studentStore'])->name('student.store');
    Route::get('/student/updateForm/{id}',[StudentController::class,'studentUpdateForm'])->name('student.updateForm');
    Route::post('/student/update/{id}',[StudentController::class,'studentUpdate'])->name('student.update');
    Route::get('/student/delete/{id}',[StudentController::class,'studentDelete'])->name('student.delete');
    
    
});
