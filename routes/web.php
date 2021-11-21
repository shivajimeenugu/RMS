<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoreController;
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

Route::get('/transactions', [dashboard::class, 'transactions'])->name('transactions');
Route::get('/', [dashboard::class, 'portfolio'])->name('home');
Route::post('/test', [dashboard::class, 'test'])->name('test');

Route::get('/testmail', [CoreController::class,'testmail'])->name('testmail');
Auth::routes();
Route::get('/rockstars', [dashboard::class, 'rockstars'])->name('rockstars');
Route::get('/home', [dashboard::class, 'portfolio'])->name('home2');
Route::get('/add', [CoreController::class, 'AddTransaction'])->name('add');
Route::get('/getme', [CoreController::class, 'GetMe'])->name('getme');

Route::get('dashboard',[dashboard::class,'index'])->name('dashboard');
Route::get('balancesheet',[dashboard::class,'balancesheet'])->name('balancesheet');
Route::get('liabalities',[dashboard::class,'liabalities'])->name('liabalities');

Route::get('add_roommates',[dashboard::class,'add_roommates'])->name('add_roommates');
Route::get('history',[dashboard::class,'history'])->name('history');

Route::get('rules',[dashboard::class,'rules'])->name('rules');

Route::get('portfolio',[dashboard::class,'portfolio'])->name('portfolio');
Route::get('DoneRecive',[dashboard::class,'DoneRecive'])->name('DoneRecive');
Route::post('AddTransaction',[CoreController::class,'AddTransaction']);
