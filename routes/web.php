<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

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
    Route::get('/', function () {
        return view('admin');
    });
    Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
    
});

Route::post('/to-home',[App\Http\Controllers\AdminController::class,'to_home'])->name('to_home');

Route::get('/', function () {
    return view('welcome');
})->name('first');

Route::domain('{APP_URL}')->middleware(['isadmin'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('first');
    Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
    
})->name('hostdomain');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

//Route::get('',['AdminController@index','prefix'=>'admin', 'middleware'=>'isadmin']);
