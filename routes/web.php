<?php

use App\Http\Controllers\LogicaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LogicaController::class, 'index'])->name('index');
Route::post('store', '\App\Http\Controllers\LogicaController@store')->name('store');
