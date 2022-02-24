<?php

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


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/search',[App\Http\Controllers\HomeController::class, 'search'])->name('search');

Route::get('/create/{ps_code}',[App\Http\Controllers\FormController::class, 'create'])->name('form.create');
Route::post('/store',[App\Http\Controllers\FormController::class, 'store'])->name('form.store');
//Route::put("/update",[App\Http\Controllers\FormController::class, 'store'])->name('form.update');

Route::get('/store/{id}',[App\Http\Controllers\FormController::class, 'index'])->name('form.index');

Route::put('/update/{id}',[App\Http\Controllers\FormController::class, 'updateform'])->name('form.update');
Route::get('/picupdated/{id}',[App\Http\Controllers\FormController::class, 'edit'])->name('form.edit');


Route::get('/data/{ps_code}/pdf', [App\Http\Controllers\FormController::class, 'createPDF'])->name('generate.PDF');
Route::get('/data/{ps_code}/excel', [App\Http\Controllers\FormController::class, 'createcsv'])->name('generate.excel');

Route::get('autocomplete', [App\Http\Controllers\HomeController::class, 'autocomplete'])->name('autocomplete');