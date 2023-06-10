<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/sender', [AgenciesController::class, 'index'])->name('sender');
Route::post('/sender_add', [AgenciesController::class, 'add'])->name('sender_add');
Route::post('/sender_update', [AgenciesController::class, 'update'])->name('sender_update');
Route::get('/sender_delete/{id}', [AgenciesController::class, 'delete'])->name('sender_delete');

Route::get('/sender', [SenderController::class, 'index'])->name('sender');
Route::post('/sender_add', [SenderController::class, 'add'])->name('sender_add');
Route::post('/sender_update', [SenderController::class, 'update'])->name('sender_update');
Route::get('/sender_delete/{id}', [SenderController::class, 'delete'])->name('sender_delete');

Route::get('/letter_out', [LettersoutController::class, 'index'])->name('letter_out');

Route::get('/letter_in', [LetterController::class, 'index'])->name('letter_in');
