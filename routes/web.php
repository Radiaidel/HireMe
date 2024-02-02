<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
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


Route::resource('services', ServiceController::class);
Route::get('/', [ServiceController::class, 'index'])->name('services.index');
Route::get('/Services/Create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/Services/store', [ServiceController::class, 'store'])->name('services.store');
