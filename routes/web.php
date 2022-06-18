<?php

use App\Http\Controllers\CategoriesController;
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
    return view('layouts.home');
})->name('home');

Route::get('/categories',[CategoriesController::class,'index'])->name('categories.index'); // new form
Route::get('/categories/create',[CategoriesController::class,'create'])->name('categories.create'); // new form
Route::get('/categories/{id}',[CategoriesController::class,'show'])->name('categories.show'); // new form
Route::post('/categories',[CategoriesController::class,'store'])->name('categories.store'); // new form
Route::get('/categories/edit/{id}',[CategoriesController::class,'edit'])->name('categories.edit'); // new form
Route::put('/categories/{id}',[CategoriesController::class,'update'])->name('categories.update'); // new form
Route::delete('/categories/{id}',[CategoriesController::class,'destroy'])->name('categories.destroy'); // new form





