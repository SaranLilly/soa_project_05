<?php

use App\Http\Controllers\ClassTableController;
use App\Http\Controllers\FirstPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisController;
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
<<<<<<< HEAD
=======


>>>>>>> f6c7642afb9dc75607807acc50db419d8de2c1ed

// Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profilepage', [ProfileController::class, 'testGet'])->name('profile.index');
Route::get('/classtable', [ClassTableController::class, 'classtable'])->name('classtable.classtable');
Route::get('/classTestpost', [ClassTableController::class, 'testPost'])->name('testPost');
Route::get('/classTestdelete', [ClassTableController::class, 'testDelete'])->name('testDelete');
Route::get('/classTestput', [ClassTableController::class, 'testPut'])->name('testPut');

Route::get('/FirstPage', [FirstPageController::class, 'FirstPage'])->name('FirstPage');

Route::get('/classex', [FirstPageController::class, 'testGet']);

<<<<<<< HEAD
Route::get('/homepage', [FirstPageController::class, 'testGet'])->name('homepage');
// Route::get('/classex{picture}',[FirstPageController::class, 'testGet']);

Route::get('/regis', [RegisController::class, 'index'])->name('regis.index');
Route::post('/regis/create', [RegisController::class, 'listofname'])->name('regis.listofname');

Route::get('/login', [LoginController::class, 'index'])->name('login.listofname');
// Route::get('/', [LoginController::class, 'index'])->name('login.listofname');
// Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
// Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
// Route::post('/employee', [EmployeeController::class, 'listofname'])->name('employee.listofname');
// Route::get('/employee/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
// Route::put('/employee/{employee}/update', [EmployeeController::class, 'update'])->name('employee.update');
// Route::delete('/employee/{employee}/destroy', [EmployeeController::class, 'destroy'])->name('employee.destroy');
=======
 Route::get('/homepage',[FirstPageController::class, 'testGet'])->name('homepage');
// Route::get('/classex{picture}',[FirstPageController::class, 'testGet']);



Route::get('/regisLevel', [RegisLevelController::class, 'regisLevel'])->name('regisLevel');


Route::post('/addOrderLevel', [RegisLevelController::class, 'addOrderLevel'])->name('addOrderLevel');



>>>>>>> f6c7642afb9dc75607807acc50db419d8de2c1ed
