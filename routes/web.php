<?php

use App\Http\Controllers\TodoControler;
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

Route::get('/', [TodoControler::class, 'index'])->name('todos');

Route::post('/', [TodoControler::class, 'store'])->name('todos');

Route::get('/{id}', [TodoControler::class, 'show'])->name('todos-show');

Route::patch('/{id}', [TodoControler::class, 'update'])->name('todos-update');

Route::delete('/{id}', [TodoControler::class, 'destroy'])->name('todos-destroy');