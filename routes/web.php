<?php

use App\Http\Controllers\GroceryController;
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



Route::get('/Grocery', [GroceryController::class, 'index'])->name('Grocery.index');
Route::get('/Grocery/create', [GroceryController::class, 'create'])->name('Grocery.create');
Route::post('/Grocery', [GroceryController::class, 'store'])->name('Grocery.store');