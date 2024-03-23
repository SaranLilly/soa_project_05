<?php

use App\Http\Controllers\ClassTableController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReserveController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reserve', [ReserveController::class, 'index'])->name('reserve.index');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');

Route::get('/classtable', [ClassTableController::class, 'classtable'])->name('classtable.classtable');
