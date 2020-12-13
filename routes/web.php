<?php
use App\Http\Controllers\StudentController;
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


Route::get('/',[studentController::class,'home']);
Route::post('/studnet/store',[studentController::class,'store']);
Route::get('/student/edit/{student_id}',[studentController::class,'edit']);
Route::post('/student/update/{student_id}',[studentController::class,'update']);
Route::get('/student/delete/{student_id}',[studentController::class,'delete']);
Route::get('/welcome', function () {
    return view('welcome');
});