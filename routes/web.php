<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
})->name('todo.home');


Route::get('/create', function () {
    return view('create');
})->name('todo.create');

Route::post('/store',[TodoController::class,'store'])->name('todo.store');
