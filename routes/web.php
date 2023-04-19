<?php

use App\Http\Controllers\Site\AuthController;
use App\Http\Controllers\Site\HomeController;
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


    Route::namespace('Site')->group(function () {

        #### Home ####
        Route::get('/', [HomeController::class,'index'])->name('/');

        #### Contact ###
        Route::get('contact', [HomeController::class,'contactPage'])->name('contactPage');
        Route::POST('postContactUs', [HomeController::class,'postContactUs'])->name('postContactUs');

        #### About ###
        Route::get('about', [HomeController::class,'aboutPage'])->name('aboutPage');

        #### Auth ###
        Route::get('sign-up', [AuthController::class,'signUp'])->name('signUpPage');

    });












Route::get('/clear/route', function (){
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    return 'Optimize Cleared Successfully';
});
