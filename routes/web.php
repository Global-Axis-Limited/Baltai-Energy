<?php

use Illuminate\Support\Facades\Route;
// HomePage
Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name('index');