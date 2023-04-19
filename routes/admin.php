<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\QualificationController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SiteTextAndImageController;
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

    #### Qualifications ####
    Route::resource('Qualifications', QualificationController::class);

    #### editQualificationSection ####
    Route::POST('editQualificationSection', [SiteTextAndImageController::class,'update'])->name('editQualificationSection');

    #### Contacts ####
    Route::resource('contacts', ContactUsController::class);

});

