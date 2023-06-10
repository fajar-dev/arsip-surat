<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgenciesController;
use App\Http\Controllers\DashboardController;

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

Route::get('/agency', [AgenciesController::class, 'index'])->name('agency');
Route::post('/agency_add', [AgenciesController::class, 'add'])->name('agency_add');
Route::post('/agency_update', [AgenciesController::class, 'update'])->name('agency_update');
Route::get('/agency_delete/{id}', [AgenciesController::class, 'delete'])->name('agency_delete');

