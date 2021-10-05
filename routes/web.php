<?php

use App\Http\Controllers\dashboard;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add', [App\Http\Controllers\CoreController::class, 'AddTransaction'])->name('add');

Route::get('dashboard',[dashboard::class,'index'])->name('dashboard');
Route::get('assets',[dashboard::class,'assets'])->name('assets');
Route::get('assets/login',[dashboard::class,'login'])->name('assets-login');
Route::get('liabalities',[dashboard::class,'liabalities'])->name('liabalities');
Route::get('history',[dashboard::class,'history'])->name('history');