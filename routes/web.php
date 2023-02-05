<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminsiteController;
use App\Http\Controllers\Admin\ToHomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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
Route::domain('admin.{APP_URL}')->middleware(['isadmin'])->group(function () {
    Route::get('/', [AdminsiteController::class, 'index'])->name('admin');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/to-home',[ToHomeController::class,'index'])->name('to_home');

});

Route::domain('{APP_URL}')->group(function () {
    Route::get('/', [HomeController::class,'index'])->name('first');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
})->name('hostdomain');

Auth::routes();

