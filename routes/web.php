<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\PassengersController;
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

Route::get('/', function () {
    return view('welcome');
});

    
    Route::get('/cars',[CarsController::class,'list'])->name('cars.list');

    Route::get('cars/xoa/{id}',[CarsController::class,'del'])->name('cars.del');

    Route::get('cars/add',[CarsController::class,'addForm'])->name('cars.add');
    Route::post('cars/add', [CarsController::class, 'saveAdd']);
    
    Route::get('cars/edit/{id}',[CarsController::class,'editForm'])->name('cars.edit');
    Route::post('cars/edit/{id}',[CarsController::class,'saveForm']);


    
    Route::get('/passengers',[PassengersController::class,'list'])->name('passengers.list');

    Route::get('passengers/xoa/{id}',[PassengersController::class,'del'])->name('passengers.del');

    Route::get('passengers/add',[PassengersController::class,'addForm'])->name('passengers.add');
    Route::post('passengers/add', [PassengersController::class, 'saveAdd']);
    
    Route::get('passengers/edit/{id}',[PassengersController::class,'editForm'])->name('passengers.edit');
    Route::post('passengers/edit/{id}',[PassengersController::class,'saveForm']);