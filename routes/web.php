<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\DepartamentController;
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

Route::get('/formulariodepartamento',[DepartamentController::class,'create']);
Route::post('/storedepartamento',[DepartamentController::class,'store'])->name('frmdepartaments.store');

Route::get('/formulariociudad',[CityController::class,'create']);
Route::post('/storeciudad',[CityController::class,'store'])->name('frmcities.store');
