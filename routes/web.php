<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class,'index'])->name('todo.home');


Route::get('/create', function () {
    return view('create');
})->name('todo.create');

Route::post('/store',[TodoController::class,'store'])->name('todo.store');
