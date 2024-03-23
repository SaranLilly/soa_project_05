<?php

use App\Http\Controllers\ClassTableController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReserveController;

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
Route::get('layout', function () {
    return view('layout');
})->name('layout');
Route::get('/reserve', [ReserveController::class, 'index'])->name('reserve.index');

Route::get('/classtable', [ClassTableController::class, 'classtable'])->name('classtable.classtable');