<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\CvUploadController;
use App\Http\Controllers\DocumentController;
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

Route::group(['prefix' => 'home', 'middleware' => 'auth'], function(){
    Route::resource('passport', PassportUploadController::class)->middleware('auth');
    Route::resource('biodata', BiodataController::class)->middleware('auth');
    Route::resource('cv', CvUploadController::class)->middleware('auth');
});




Route::get('/AdminLogin', [AdminRouteController::class, 'login'])->name('admin_login');
Route::get('/AdminRegister', [AdminRouteController::class, 'register'])->name('admin_register');
Route::get('/dashboard', [AdminRouteController::class, 'dashboard'])->name('dashboard')->middleware('access');

Route::post('/AdminLogin', [AdminLoginController::class, 'login'])->name('login_admin');
Route::post('/AdminRegister', [AdminRegisterController::class, 'register'])->name('register_admin');
Route::post('/AdminLogout', [AdminRegisterController::class, 'logout'])->name('admin-logout');

Route::group(['prefix' => 'dashboard', 'middleware' => 'access' ], function(){

    Route::get('staff', [StaffController::class, 'index'])->name('all_staff');
    Route::get('staff/{user}', [StaffController::class, 'show'])->name('staff.show');
    Route::delete('staff/{id}/delete', [StaffController::class, 'delete'])->name('staff.delete');
    Route::resource('document', DocumentController::class);

});