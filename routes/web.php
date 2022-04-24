<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoreController;
use App\Http\Controllers\PushController;
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
Route::get('/d', [dashboard::class, 'GetDuty'])->name('d');
Route::get('/sendupdate', [CoreController::class, 'sendupdates'])->name('sendupdates');

//ShowAllDutys
Route::get('/ShowAllDutys', [dashboard::class, 'ShowAllDutys'])->name('ShowAllDutys');
Route::get('/transactions', [dashboard::class, 'transactions2'])->name('transactions');
Route::get('/transactions2', [dashboard::class, 'transactions2'])->name('transactions2');

Route::get('/', [dashboard::class, 'balancesheet2'])->name('home');
Route::post('/test', [dashboard::class, 'test'])->name('test');

Route::get('/testmail', [CoreController::class,'testmail'])->name('testmail');
Auth::routes();
Route::get('/rockstars', [dashboard::class, 'rockstars'])->name('rockstars');
Route::get('/home', [dashboard::class, 'balancesheet2'])->name('home2');
Route::get('/add', [CoreController::class, 'AddTransaction'])->name('add');
Route::get('/getme', [CoreController::class, 'GetMe'])->name('getme');

Route::get('dashboard',[dashboard::class,'index'])->name('dashboard');
Route::get('balancesheet',[dashboard::class,'balancesheet'])->name('balancesheet');
Route::get('balancesheet2',[dashboard::class,'balancesheet2'])->name('balancesheet2');

Route::get('liabalities',[dashboard::class,'liabalities'])->name('liabalities');

Route::get('add_roommates',[dashboard::class,'add_roommates'])->name('add_roommates');
Route::get('history',[dashboard::class,'history'])->name('history');

Route::get('rules',[dashboard::class,'rules'])->name('rules');
Route::POST('RemoveTransaction',[dashboard::class,'RemoveTransaction'])->name('RemoveTransaction');


Route::get('portfolio',[dashboard::class,'balancesheet2'])->name('portfolio');
Route::get('DoneRecive',[dashboard::class,'DoneRecive'])->name('DoneRecive');
Route::post('AddTransaction',[CoreController::class,'AddTransaction']);

Route::post('push',[PushController::class,'store']);
Route::get('push',[PushController::class,'push'])->name('push');

