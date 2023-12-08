<?php

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


/* teacher*/

use App\Http\Controllers\TeacherController;

Route::get('/teacher/{id}', [TeacherController::class, 'show'])->name('teacher.show');
Route::get('/teacher/{id}/edit', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::put('/teacher/{id}', [TeacherController::class, 'update'])->name('teacher.update');


/*manager*/

use App\Http\Controllers\ManagerController;

Route::get('/manager', [ManagerController::class, 'index'])->name('manager.index');
Route::post('/manager/upload-link', [ManagerController::class, 'uploadYoutubeLink'])->name('manager.upload.link');
Route::post('/manager/upload-teacher-info', [ManagerController::class, 'uploadTeacherInfo'])->name('manager.uploadTeacherInfo');


/*students*/

use App\Http\Controllers\StudentController;

Route::get('/student', [StudentController::class, 'index'])->name('student.index');

/*login*/

use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');


