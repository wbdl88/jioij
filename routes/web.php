<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\UsersController;
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
//用户控制
Route::get('signup', [UsersController::class, 'create'])->name('signup');

Route::get('/',[StaticController::class,'home'])->name('home');
Route::get('help',[StaticController::class,'help'])->name('help');
Route::get('about',[StaticController::class,'about'])->name('about');

