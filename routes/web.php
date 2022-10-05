<?php

use App\Http\Controllers\Admin\AdminAuthController;
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


Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {

    
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
 
    Route::group(['middleware' => 'adminauth'], function () {
        // Route::get('/', function () {
        //     return view('welcome');
        // })->name('Dashboard');

        Route::group(['namespace' => 'Dashboard'], function()
        {
            Route::resource('/', 'DashboardController');
        });

        Route::group(['namespace' => 'User'], function()
        {
            
            Route::resource('/users', 'UsersController');
        });
 
    });
});

    // Route::middleware(['auth'])->group(function () {

    // Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function()
    // {
    //     Route::group(['namespace' => 'Dashboard'], function()
    //     {
    //         Route::resource('/', 'DashboardController');
    //     });

    //     Route::group(['namespace' => 'User'], function()
    //     {
    //         Route::resource('/users', 'UsersController');
        
    //     });
    // });
    // });

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
