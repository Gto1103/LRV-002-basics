<?php

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


Route::get('/todo', [\App\Http\Controllers\TodoController::class, 'index'])
    ->name('todo');
Route::get('/todo/{id}', [\App\Http\Controllers\TodoController::class, 'show'])
    ->name('show');
Route::post('/todo/create', [\App\Http\Controllers\TodoController::class, 'store'])
    ->name('create');
Route::get('/todo//delete/{id}', [\App\Http\Controllers\TodoController::class, 'destroy'])
    ->name('delete');
