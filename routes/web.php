<?php

use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\User\UsersController;
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

#Admin Routes
Route::get('admin/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin')->middleware('guest:admin');
Route::post('admin/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('adminLogout');

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('/users', UsersController::class);
    
});

// Route::middleware(['auth'])->group(function () {
//     Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function()
//     {
//         Route::group(['namespace' => 'Dashboard'], function()
//         {
//             Route::resource('/', 'DashboardController');
//         });

//         Route::group(['namespace' => 'User'], function()
//         {
//             Route::resource('/users', 'UsersController');
        
//         });
//     });
// });

Auth::routes();
# Front Routes
Route::group(['authGrouping' => 'users.auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
