<?php

use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Survey\SurveyController;
use App\Http\Controllers\Admin\User\UsersController;
use App\Http\Controllers\Admin\Survey\SurveyQuestionController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\UserController;
use App\Models\Question;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::post('forgot-password', [ForgotPasswordController::class, 'forgotPassword'])->name('forgot-password');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::post('first-password-change', [UserController::class, 'changePassword'])->name('first.password.change');

#Admin Routes
Route::get('admin', [AdminAuthController::class, 'getLogin'])->name('adminLogin')->middleware('guest:admin');
Route::get('admin/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin')->middleware('guest:admin');
Route::post('admin/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('adminLogout');

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/users', UsersController::class);
    Route::resource('/question', SurveyQuestionController::class);
    Route::resource('/survey', SurveyController::class);
});

Auth::routes();
Route::post('/login', [
    'uses'          => 'App\Http\Controllers\Auth\LoginController@login',
    'middleware'    => 'checkstatus',
]);
# Front Routes
Route::group(['authGrouping' => 'users.auth'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/change-password', [ResetPasswordController::class, 'firstTimePasswordChange'])->name('change-password');
    //Route::resource('/survey', SurveyController::class);
    Route::get('/thank-you', [App\Http\Controllers\SurveyController::class, 'thankYou'])->name('thank-you')->middleware('checkSurveyStatus');
    Route::get('/time-out', [App\Http\Controllers\SurveyController::class, 'timeOut'])->name('time-out')->middleware('checkSurveyStatus');
    Route::get('/take-survey', [App\Http\Controllers\SurveyController::class, 'index'])->name('take-survey')->middleware('checkSurveyStatus');
    Route::post('/take-survey/store', [App\Http\Controllers\SurveyController::class, 'store'])->name('take-survey-store');
    Route::post('/get-question', [App\Http\Controllers\SurveyController::class, 'getQuestion'])->name('get-question');

    Route::post('/update-survey-time', [App\Http\Controllers\SurveyController::class, 'updateSurveyTime'])->name('update-survey-time');
});


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
