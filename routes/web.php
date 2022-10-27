<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\BillController;

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



Route::controller(CustomerController::class)->group(function (){
    Route::get('/', 'create');
    Route::get('/store', 'store');
    Route::get('/showall', 'index');
    Route::get('/delete/{id}', 'destroy');

});

Route::controller(GoodsController::class)->group(function (){
    Route::get('/addgoods', 'create');
    Route::get('/storegood', 'store');
    Route::get('/showgoods', 'index');
    Route::get('/deletegood/{id}', 'destroy');

});

Route::controller(BillController::class)->group(function (){
    Route::get('/bill', 'create');
    Route::get('/storetestbill', 'store');
    Route::get('/showallbill', 'index');
    Route::get('/print', 'show');
    Route::get('/deletebill/{id}', 'destroy');

});





