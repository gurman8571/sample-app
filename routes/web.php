<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
route::view('/','welcome')->name('welcome')->middleware('auth');
Route::post('store', [EmployeeController::class, 'insert'])->middleware('auth');
Route::get('index', [EmployeeController::class, 'index'])->name('index')->middleware('auth');