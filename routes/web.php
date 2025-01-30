<?php

use Illuminate\Support\Facades\Route;
// HomePage
Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\HomePageController::class, 'about'])->name('about');
Route::get('/solution', [App\Http\Controllers\HomePageController::class, 'solution'])->name('solution');
Route::get('/solution/residential', [App\Http\Controllers\HomePageController::class, 'residential'])->name('residential');
Route::get('/solution/business', [App\Http\Controllers\HomePageController::class, 'business'])->name('business');
Route::get('/solution/industrial', [App\Http\Controllers\HomePageController::class, 'industrial'])->name('industrial');
Route::get('/faqs', [App\Http\Controllers\HomePageController::class, 'faqs'])->name('faqs');
Route::get('/contact', [App\Http\Controllers\HomePageController::class, 'contact'])->name('contact');
Route::get('/ssn/our_ssn', [App\Http\Controllers\HomePageController::class, 'our_ssn'])->name('our_ssn');
Route::get('/careers/career', [App\Http\Controllers\HomePageController::class, 'career'])->name('career');
Route::get('/careers/baltai', [App\Http\Controllers\HomePageController::class, 'baltai'])->name('baltai');
Route::get('/finance', [App\Http\Controllers\HomePageController::class, 'finance'])->name('finance');