<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\UserController;
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


Auth::routes();
Route::get('/', [UserController::class, 'index'])->name('Guest.index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('admin', [AdminController::class, 'index'])->name('admin.index')->middleware('auth:admin');
Route::get('Login_Admin', [LoginController::class, 'ShowloginAdmin'])->name('admin.login.show');
Route::post('Login_Admin', [LoginController::class, 'loginAdmin'])->name('admin.login.submit');

Route::fallback(function () {
    $url = request()->url();
    return response()->view('Guest.pages.errors_404', ['url' => $url], 404);
});
