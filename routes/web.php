<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TodoController;

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


Auth::routes();


Route::get('/home',fn()=> redirect()->route('home')); 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/todo/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/todo/store', [TodoController::class, 'store'])->name('todo.store');
Route::get('/todo/edit/{id}', [TodoController::class, 'edit'])->name('todo.edit');
Route::post('/todo/update/{id}', [TodoController::class, 'update'])->name('todo.update');
Route::get('/todo/delete/{id}', [TodoController::class, 'delete'])->name('todo.delete');
