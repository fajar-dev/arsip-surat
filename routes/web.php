<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\SenderController;
use App\Http\Controllers\AgenciesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LettersoutController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\AccountController;

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
Route::post('submit', [AuthController::class, 'submit'])->name('login_submit')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/agency', [AgenciesController::class, 'index'])->name('agency')->middleware('auth');
Route::post('/agency_add', [AgenciesController::class, 'add'])->name('agency_add')->middleware('auth');
Route::post('/agency_update', [AgenciesController::class, 'update'])->name('agency_update')->middleware('auth');
Route::get('/agency_delete/{id}', [AgenciesController::class, 'delete'])->name('agency_delete')->middleware('auth');

Route::get('/sender', [SenderController::class, 'index'])->name('sender')->middleware('auth');
Route::post('/sender_add', [SenderController::class, 'add'])->name('sender_add')->middleware('auth');
Route::post('/sender_update', [SenderController::class, 'update'])->name('sender_update')->middleware('auth');
Route::get('/sender_delete/{id}', [SenderController::class, 'delete'])->name('sender_delete')->middleware('auth');

Route::get('/letter_out', [LettersoutController::class, 'index'])->name('letter_out')->middleware('auth');
Route::get('/letter_out/add', [LettersoutController::class, 'add'])->name('letter_out_add')->middleware('auth');
Route::post('/letter_out/add/submit', [LettersoutController::class, 'submit'])->name('letter_out_add_submit')->middleware('auth');
Route::get('/letter_out/delete/{id}', [LettersoutController::class, 'delete'])->name('letter_out_add_delete')->middleware('auth');
Route::get('/letter_out/detail/{id}', [LettersoutController::class, 'detail'])->name('letter_out_detail')->middleware('auth');
Route::get('/letter_out/edit/{id}', [LettersoutController::class, 'edit'])->name('letter_out_edit')->middleware('auth');
Route::post('/letter_out/edit/update', [LettersoutController::class, 'update'])->name('letter_out_edit_update')->middleware('auth');


Route::get('/letter_in', [LetterController::class, 'index'])->name('letter_in')->middleware('auth');
Route::get('/letter_in/add', [LetterController::class, 'add'])->name('letter_in_add')->middleware('auth');
Route::post('/letter_in/add/submit', [LetterController::class, 'submit'])->name('letter_in_add_submit')->middleware('auth');
Route::get('/letter_in/delete/{id}', [LetterController::class, 'delete'])->name('letter_in_add_delete')->middleware('auth');
Route::get('/letter_in/detail/{id}', [LetterController::class, 'detail'])->name('letter_in_detail')->middleware('auth');

Route::get('/disposisi', [DisposisiController::class, 'index'])->name('disposisi')->middleware('auth');
Route::get('/disposisi/detail/{id}', [DisposisiController::class, 'detail'])->name('disposisi_detail')->middleware('auth');


Route::get('/account', [AccountController::class, 'index'])->name('account')->middleware('auth');
Route::post('/account/update', [AccountController::class, 'update'])->name('account_update')->middleware('auth');
Route::post('/account/change', [AccountController::class, 'change'])->name('account_change')->middleware('auth');


Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('auth');
Route::post('/user/add', [UserController::class, 'add'])->name('user_add')->middleware('auth');
Route::post('/user/update', [UserController::class, 'update'])->name('user_update')->middleware('auth');
Route::post('/user/change_password', [UserController::class,'change'])->name('change_pass')->middleware('auth');
Route::get('/user/delete/{id}', [UserController::class, 'delete'])->name('user_delete')->middleware('auth');


