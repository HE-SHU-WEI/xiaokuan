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


/*main*/

use App\Http\Controllers\MainController;

Route::get('/main', [MainController::class, 'index'])->name('main.index');




/* teacher*/

use App\Http\Controllers\TeacherController;

Route::get('/teacher/{id}', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('/teacher/{classname}/students', [TeacherController::class, 'showStudents'])->name('teacher.showStudents');



/*manager*/

use App\Http\Controllers\ManagerController;

Route::prefix('manager')->group(function () {
    Route::get('/', [ManagerController::class, 'index'])->name('manager.index');

    // Edit Teacher Routes
    Route::get('/editteacher', [ManagerController::class, 'editTeacherView'])->name('editTeacherView');
    Route::get('/editteacher/{id}', [ManagerController::class, 'editTeacherForm'])->name('manager.editTeacherForm');
    Route::put('/updateteacher/{id}', [ManagerController::class, 'updateTeacher'])->name('manager.updateTeacher');
    Route::delete('/deleteteacher/{id}', [ManagerController::class, 'deleteTeacher'])->name('manager.deleteTeacher');

    // Create Teacher Routes
    Route::get('/create-teacher', [ManagerController::class, 'createTeacherView'])->name('manager.createTeacherView');
    Route::post('/store-teacher', [ManagerController::class, 'storeTeacher'])->name('manager.storeTeacher');

    // Edit Manager Account Route
    Route::get('/manager/edit-manager', [ManagerController::class, 'editManagerView'])->name('editManagerView');
    Route::put('/manager/account', [ManagerController::class, 'updateManager'])->name('manager.updateManager');


    // Register Student Routes
    Route::get('/manager/register-student', [ManagerController::class, 'registerStudentView'])->name('registerStudentView');
    Route::post('/manager/register-student', [ManagerController::class, 'registerStudent'])->name('manager.registerStudent');

    Route::get('/courses', [ManagerController::class, 'coursesView'])->name('coursesView');
    Route::get('/courses/{classname}/edit', [ManagerController::class, 'editClassView'])->name('editClassView');
    Route::put('/manager/update-class/{id}', [ManagerController::class, 'updateClass'])->name('updateClass');


    // 显示上传课程表单的路由
    Route::get('/upload-course', [ManagerController::class, 'createCourse'])->name('uploadCourseView');

    // 处理课程上传表单提交的路由
    Route::post('/store-course', [ManagerController::class, 'storeCourse'])->name('storeCourse');


    //購買課程
    Route::get('/manager/student-purchase-form', [ManagerController::class, 'studentPurchaseFormView'])
    ->name('studentPurchaseFormView');

// 處理新增購課記錄的請求

    Route::get('/student-purchase-form', [ManagerController::class, 'studentPurchaseFormView'])
        ->name('studentPurchaseFormView');
    Route::post('/store-student-purchase', [ManagerController::class, 'storeStudentPurchase'])
        ->name('storeStudentPurchase');




        //-------------------------------------寄信
        Route::get('/manager/edit-email-content', [ManagerController::class,'editEmailContentView'])->name('editEmailContentView');
        Route::post('/manager/save-email-content', [ManagerController::class,'saveEmailContent'])->name('saveEmailContent');



        Route::get('/edit-email-content', 'ManagerController@editEmailContentView')->name('editEmailContentView');
        Route::post('/update-email-content', 'ManagerController@updateEmailContent')->name('updateEmailContent');

//-----------------------------------學生名單

        Route::get('/show-students', [ManagerController::class,'showStudents'])->name('showStudents');
        Route::delete('/students/{id}', [ManagerController::class, 'deleteStudent'])->name('deleteStudent');
        Route::post('/query-student', [ManagerController::class, 'queryStudent'])->name('queryStudent');


});




/*students*/

use App\Http\Controllers\StudentController;

Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/cart/show', [StudentController::class,'showShoppingCart'])->name('cart.show');
Route::get('/watch-courses', [StudentController::class,'showWatchCourses'])->name('watch.courses');
Route::get('/watch-video/{classname}', [StudentController::class,'showWatchVideo'])->name('watch.video');
Route::post('/purchase', [StudentController::class,'purchase'])->name('purchase');

Route::post('/update-watchtime', [StudentController::class, 'updateWatchTime'])->name('update.watchtime');

Route::post('/progress', [StudentController::class, 'progress'])->name('progress');



/*login*/

use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');


/*class */

use App\Http\Controllers\ClassController;

Route::get('/class', [ClassController::class, 'index'])->name('class.index');
//class篩選
Route::post('/filter-classes', 'YourController@filterClasses')->name('filterClasses');
Route::get('/classes', [ClassController::class, 'index'])->name('class.index');
//class細節
Route::get('/class/{id}', [ClassController::class, 'show'])->name('showClass');
//購物車
Route::post('/addToCart/{id}', [ClassController::class, 'addToCart'])->name('addToCart');


// 在 routes/web.php 中添加
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


//------------------------------------





Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/index', function () {
    return view('index');
})->name('index');

