<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\SenderController;
use App\Http\Controllers\AgenciesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LettersoutController;

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
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login_action', [AuthController::class, 'login_action'])->name('login_action')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/agency', [AgenciesController::class, 'index'])->name('agency');
Route::post('/agency_add', [AgenciesController::class, 'add'])->name('agency_add');
Route::post('/agency_update', [AgenciesController::class, 'update'])->name('agency_update');
Route::get('/agency_delete/{id}', [AgenciesController::class, 'delete'])->name('agency_delete');

Route::get('/sender', [SenderController::class, 'index'])->name('sender');
Route::post('/sender_add', [SenderController::class, 'add'])->name('sender_add');
Route::post('/sender_update', [SenderController::class, 'update'])->name('sender_update');
Route::get('/sender_delete/{id}', [SenderController::class, 'delete'])->name('sender_delete');

Route::get('/letter_out', [LettersoutController::class, 'index'])->name('letter_out');
Route::get('/letter_out/add', [LettersoutController::class, 'add'])->name('letter_out_add');
Route::post('/letter_out/add/submit', [LettersoutController::class, 'submit'])->name('letter_out_add_submit');
Route::get('/letter_out/delete/{id}', [LettersoutController::class, 'delete'])->name('letter_out_add_delete');
Route::get('/letter_out/detail/{id}', [LettersoutController::class, 'detail'])->name('letter_out_detail');
Route::get('/letter_out/edit/{id}', [LettersoutController::class, 'edit'])->name('letter_out_edit');
Route::post('/letter_out/edit/update', [LettersoutController::class, 'update'])->name('letter_out_edit_update');


Route::get('/letter_in', [LetterController::class, 'index'])->name('letter_in');
Route::get('/letter_in/add', [LetterController::class, 'add'])->name('letter_in_add');
Route::post('/letter_in/add/submit', [LetterController::class, 'submit'])->name('letter_in_add_submit');
Route::get('/letter_in/delete/{id}', [LetterController::class, 'delete'])->name('letter_in_add_delete');
Route::get('/letter_in/detail/{id}', [LetterController::class, 'detail'])->name('letter_in_detail');

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::post('/user/add', [UserController::class, 'add'])->name('user_add');
Route::post('/user/update', [UserController::class, 'update'])->name('user_update');
Route::post('/user/change_password', [UserController::class,'change'])->name('change_pass');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user_delete');


