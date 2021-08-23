<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\CvUploadController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminRouteController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\PassportUploadController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('passport', PassportUploadController::class)->middleware('auth');
Route::resource('biodata', BiodataController::class)->middleware('auth');
Route::resource('cv', CvUploadController::class)->middleware('auth');


Route::get('/AdminLogin', [AdminRouteController::class, 'login'])->name('admin_login');
Route::get('/AdminRegister', [AdminRouteController::class, 'register'])->name('admin_register');
Route::get('/dashboard', [AdminRouteController::class, 'dashboard'])->name('dashboard');

Route::post('/AdminLogin', [AdminLoginController::class, 'login'])->name('login_admin');
Route::post('/AdminRegister', [AdminRegisterController::class, 'register'])->name('register_admin');
Route::post('/AdminLogout', [AdminRegisterController::class, 'logout'])->name('admin-logout');