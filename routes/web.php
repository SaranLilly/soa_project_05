<?php

use App\Http\Controllers\ClassTableController;
use App\Http\Controllers\FirstPageController;
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
Route::get('/', function () {
    return view('layout');
})->name('layout');
Route::get('/reserve', [ReserveController::class, 'index'])->name('reserve.index');
Route::delete('/reserve', [ReserveController::class, 'delete'])->name('reserve.delete');



Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profilepage', [ProfileController::class, 'testGet']);
Route::get('/classtable', [ClassTableController::class, 'classtable'])->name('classtable.classtable');
Route::get('/classTestpost', [ClassTableController::class, 'testPost'])->name('testPost');
Route::get('/classTestdelete', [ClassTableController::class, 'testDelete'])->name('testDelete');
Route::get('/classTestput', [ClassTableController::class, 'testPut'])->name('testPut');

Route::get('/FirstPage', [FirstPageController::class, 'FirstPage'])->name('FirstPage');

Route::get('/classex', [FirstPageController::class, 'testGet']);

 Route::get('/homepage',[FirstPageController::class, 'testGet'])->name('homepage');
// Route::get('/classex{picture}',[FirstPageController::class, 'testGet']);

