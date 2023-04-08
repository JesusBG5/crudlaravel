<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductoController;

Route::get('/',[PageController::class,'home'])->name('home');

Route::resource('productos',ProductoController::class)->except(['show']);