<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


Route::group(['prefix' => 'admin'], function () {
    #### Auth ####
    Route::get('login', [AuthController::class, 'index'])->name('admin.loginPage');
    Route::post('login', [AuthController::class, 'doLogin'])->name('admin.doLogin');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    #### Auth ####
    Route::get('logout', 'AuthController@logout')->name('admin.logout');


    #### Home ####
    Route::view('/', 'Admin/index')->name('adminHome');

    #### Admins ####
    Route::resource('admins', AdminController::class);

    #### Services ####
    Route::resource('services', ServiceController::class);

});

