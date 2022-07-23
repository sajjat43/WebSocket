<?php

use App\Http\Controllers\api\apiStudentController;
use App\Http\Controllers\api\studentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/student/store',[apiStudentController::class,'studentStore'])->name('student.create');
Route::get('/student/view',[apiStudentController::class,'studentShow'])->name('student.view');
Route::delete('/student/delete/{id}',[apiStudentController::class,'studentDelete'])->name('student.delete');