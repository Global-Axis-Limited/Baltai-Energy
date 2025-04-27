<?php

use Illuminate\Support\Facades\Route;

// HomePage
Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\HomePageController::class, 'about'])->name('about');
Route::get('/solution', [App\Http\Controllers\HomePageController::class, 'solution'])->name('solution');
Route::get('/solution/residential', [App\Http\Controllers\HomePageController::class, 'residential'])->name('residential');
Route::get('/solution/business', [App\Http\Controllers\HomePageController::class, 'business'])->name('business');
Route::get('/solution/industrial', [App\Http\Controllers\HomePageController::class, 'industrial'])->name('industrial');
Route::get('/solution/product', [App\Http\Controllers\HomePageController::class, 'product'])->name('product');
Route::get('/faqs', [App\Http\Controllers\HomePageController::class, 'faqs'])->name('faqs');
Route::get('/contact', [App\Http\Controllers\HomePageController::class, 'contact'])->name('contact');
Route::get('/ssn/our_ssn', [App\Http\Controllers\HomePageController::class, 'our_ssn'])->name('our_ssn');
Route::get('/careers/career', [App\Http\Controllers\HomePageController::class, 'career'])->name('career');
Route::get('/careers/baltai', [App\Http\Controllers\HomePageController::class, 'baltai'])->name('baltai');
// Onboarding And Solar Basics Routes
Route::get('/learning/solar-basics', [App\Http\Controllers\HomePageController::class, 'solar_basics'])->name('solar_basics');
Route::get('/learning/solar-basics/company_introduction', [App\Http\Controllers\HomePageController::class, 'company_introduction'])->name('company_introduction');
Route::get('/learning/solar-basics/ssn_overview', [App\Http\Controllers\HomePageController::class, 'ssn_overview'])->name('ssn_overview');
Route::get('/learning/solar-basics/solar_technology', [App\Http\Controllers\HomePageController::class, 'solar_technology'])->name('solar_technology');
Route::get('/learning/solar-basics/solar_energy_benefits', [App\Http\Controllers\HomePageController::class, 'solar_energy_benefits'])->name('solar_energy_benefits');

// Sales Techniques and Customer Acquisition Routes
Route::get('/learning/customer_acquisition', [App\Http\Controllers\HomePageController::class, 'customer_acquisition'])->name('customer_acquisition');

// Solar Products and Financing Options Routes

Route::get('/learning/financing_options', [App\Http\Controllers\HomePageController::class, 'financing_options'])->name('financing_options');

// Customer Relationship Management Routes
 
Route::get('/learning/relationship_management', [App\Http\Controllers\HomePageController::class, 'relationship_management'])->name('relationship_management');

// Technical Knowledge for SRMs Rourtes
Route::get('/learning/technical_knowledge', [App\Http\Controllers\HomePageController::class, 'technical_knowledge'])->name('technical_knowledge');

// Compliance and Ethical Standards Routes
Route::get('/learning/compliance', [App\Http\Controllers\HomePageController::class, 'compliance'])->name('compliance');

// Digital Tools and Technology Routes
Route::get('/learning/digital_tools', [App\Http\Controllers\HomePageController::class, 'digital_tools'])->name('digital_tools');

// Soft Skills and Personal Development Routes
Route::get('/learning/soft_skills', [App\Http\Controllers\HomePageController::class, 'soft_skills'])->name('soft_skills');


Route::get('/finance', [App\Http\Controllers\HomePageController::class, 'finance'])->name('finance');
Route::get('/partners', [App\Http\Controllers\HomePageController::class, 'partners'])->name('partners');
Route::get('/insight/our_insight', [App\Http\Controllers\HomePageController::class, 'our_insight'])->name('our_insight');
Route::get('/energy_glossary', [App\Http\Controllers\HomePageController::class, 'energy_glossary'])->name('energy_glossary');
Route::get('/energy_calculator', [App\Http\Controllers\HomePageController::class, 'energy_calculator'])->name('energy_calculator');
Route::get('/courses', [App\Http\Controllers\HomePageController::class, 'courses'])->name('courses');
Route::get('/courses_details', [App\Http\Controllers\HomePageController::class, 'courses_details'])->name('courses_details');
Route::get('/courses_two', [App\Http\Controllers\HomePageController::class, 'courses_two'])->name('courses_two');
Route::get('/kick_start', [App\Http\Controllers\HomePageController::class, 'kick_start'])->name('kick_start');
Route::get('/login', [App\Http\Controllers\HomePageController::class, 'login'])->name('login');
