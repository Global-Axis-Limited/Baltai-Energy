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
Route::get('/ssn', [App\Http\Controllers\HomePageController::class, 'our_ssn'])->name('our_ssn');
Route::get('/srm', [App\Http\Controllers\HomePageController::class, 'career'])->name('career');
Route::get('/learning', [App\Http\Controllers\HomePageController::class, 'baltai'])->name('baltai');
// Onboarding And Solar Basics Routes
Route::get('/learning/solar-basics', [App\Http\Controllers\HomePageController::class, 'solar_basics'])->name('solar_basics');
Route::get('/learning/solar-basics/company_introduction', [App\Http\Controllers\HomePageController::class, 'company_introduction'])->name('company_introduction');
Route::get('/learning/solar-basics/ssn_overview', [App\Http\Controllers\HomePageController::class, 'ssn_overview'])->name('ssn_overview');
Route::get('/learning/solar-basics/solar_technology', [App\Http\Controllers\HomePageController::class, 'solar_technology'])->name('solar_technology');
Route::get('/learning/solar-basics/solar_energy_benefits', [App\Http\Controllers\HomePageController::class, 'solar_energy_benefits'])->name('solar_energy_benefits');
Route::get('/learning/solar-basics/onboarding_process', [App\Http\Controllers\HomePageController::class, 'onboarding_process'])->name('onboarding_process');
Route::get('/learning/solar-basics/dress_code', [App\Http\Controllers\HomePageController::class, 'dress_code'])->name('dress_code');
Route::get('/learning/solar-basics/communication', [App\Http\Controllers\HomePageController::class, 'communication'])->name('communication');

// Sales Techniques and Customer Acquisition Routes
Route::get('/learning/customer_acquisition', [App\Http\Controllers\HomePageController::class, 'customer_acquisition'])->name('customer_acquisition');
Route::get('/learning/customer_acquisition/solar_market', [App\Http\Controllers\HomePageController::class, 'solar_market'])->name('solar_market');
Route::get('/learning/customer_acquisition/target_audiences', [App\Http\Controllers\HomePageController::class, 'target_audiences'])->name('target_audiences');
Route::get('/learning/customer_acquisition/lead_generation', [App\Http\Controllers\HomePageController::class, 'lead_generation'])->name('lead_generation');
Route::get('/learning/customer_acquisition/consultations', [App\Http\Controllers\HomePageController::class, 'consultations'])->name('consultations');
Route::get('/learning/customer_acquisition/pricing_models', [App\Http\Controllers\HomePageController::class, 'pricing_models'])->name('pricing_models');
Route::get('/learning/customer_acquisition/overcoming_objections', [App\Http\Controllers\HomePageController::class, 'overcoming_objections'])->name('overcoming_objections');
Route::get('/learning/customer_acquisition/developing_sales_pitches', [App\Http\Controllers\HomePageController::class, 'developing_sales_pitches'])->name('developing_sales_pitches');
Route::get('/learning/customer_acquisition/tracking_sales_performance', [App\Http\Controllers\HomePageController::class, 'tracking_sales_performance'])->name('tracking_sales_performance');



// Solar Products and Financing Options Routes

Route::get('/learning/financing_options', [App\Http\Controllers\HomePageController::class, 'financing_options'])->name('financing_options');
Route::get('/learning/financing_options/solar_products', [App\Http\Controllers\HomePageController::class, 'solar_products'])->name('solar_products');
Route::get('/learning/financing_options/flexible_financing', [App\Http\Controllers\HomePageController::class, 'flexible_financing'])->name('flexible_financing');
Route::get('/learning/financing_options/customer_needs', [App\Http\Controllers\HomePageController::class, 'customer_needs'])->name('customer_needs');
Route::get('/learning/financing_options/potential_savings', [App\Http\Controllers\HomePageController::class, 'potential_savings'])->name('potential_savings');
Route::get('/learning/financing_options/solar_investments', [App\Http\Controllers\HomePageController::class, 'solar_investments'])->name('solar_investments');
Route::get('/learning/financing_options/solar_packages', [App\Http\Controllers\HomePageController::class, 'solar_packages'])->name('solar_packages');


// Customer Relationship Management Routes
Route::get('/learning/relationship_management', [App\Http\Controllers\HomePageController::class, 'relationship_management'])->name('relationship_management');
Route::get('/learning/relationship_management/customer_engagement', [App\Http\Controllers\HomePageController::class, 'customer_engagement'])->name('customer_engagement');
Route::get('/learning/relationship_management/customer_feedback', [App\Http\Controllers\HomePageController::class, 'customer_feedback'])->name('customer_feedback');
Route::get('/learning/relationship_management/continued_satisfaction', [App\Http\Controllers\HomePageController::class, 'continued_satisfaction'])->name('continued_satisfaction');
Route::get('/learning/relationship_management/new_leads', [App\Http\Controllers\HomePageController::class, 'new_leads'])->name('new_leads');
Route::get('/learning/relationship_management/resolving_complaints', [App\Http\Controllers\HomePageController::class, 'resolving_complaints'])->name('resolving_complaints');
Route::get('/learning/relationship_management/customer_loyalty', [App\Http\Controllers\HomePageController::class, 'customer_loyalty'])->name('customer_loyalty');


// Technical Knowledge for SRMs Rourtes
Route::get('/learning/technical_knowledge', [App\Http\Controllers\HomePageController::class, 'technical_knowledge'])->name('technical_knowledge');
Route::get('/learning/technical_knowledge/solar_panel_basics', [App\Http\Controllers\HomePageController::class, 'solar_panel_basics'])->name('solar_panel_basics');
Route::get('/learning/technical_knowledge/battery_storage_systems', [App\Http\Controllers\HomePageController::class, 'battery_storage_systems'])->name('battery_storage_systems');
Route::get('/learning/technical_knowledge/installation_process', [App\Http\Controllers\HomePageController::class, 'installation_process'])->name('installation_process');
Route::get('/learning/technical_knowledge/monitoring_performance', [App\Http\Controllers\HomePageController::class, 'monitoring_performance'])->name('monitoring_performance');
Route::get('/learning/technical_knowledge/troubleshooting', [App\Http\Controllers\HomePageController::class, 'troubleshooting'])->name('troubleshooting');
Route::get('/learning/technical_knowledge/maintenance_warranty', [App\Http\Controllers\HomePageController::class, 'maintenance_warranty'])->name('maintenance_warranty');

// Compliance and Ethical Standards Routes
Route::get('/learning/compliance', [App\Http\Controllers\HomePageController::class, 'compliance'])->name('compliance');
Route::get('/learning/compliance/industry_regulations', [App\Http\Controllers\HomePageController::class, 'industry_regulations'])->name('industry_regulations');
Route::get('/learning/compliance/government_incentives', [App\Http\Controllers\HomePageController::class, 'government_incentives'])->name('government_incentives');Route::get('/learning/compliance/environmental_compliance', [App\Http\Controllers\HomePageController::class, 'environmental_compliance'])->name('environmental_compliance');
Route::get('/learning/compliance/ethical_standards', [App\Http\Controllers\HomePageController::class, 'ethical_standards'])->name('ethical_standards');
Route::get('/learning/compliance/customer_data_privacy', [App\Http\Controllers\HomePageController::class, 'customer_data_privacy'])->name('customer_data_privacy');
Route::get('/learning/compliance/documentation', [App\Http\Controllers\HomePageController::class, 'documentation'])->name('documentation');

// Digital Tools and Technology Routes
Route::get('/learning/digital_tools', [App\Http\Controllers\HomePageController::class, 'digital_tools'])->name('digital_tools');
Route::get('/learning/digital_tools/crm_tools', [App\Http\Controllers\HomePageController::class, 'crm_tools'])->name('crm_tools');
Route::get('/learning/digital_tools/lead_tracking', [App\Http\Controllers\HomePageController::class, 'lead_tracking'])->name('lead_tracking');
Route::get('/learning/digital_tools/solar_system_design', [App\Http\Controllers\HomePageController::class, 'solar_system_design'])->name('solar_system_design');
Route::get('/learning/digital_tools/social_media', [App\Http\Controllers\HomePageController::class, 'social_media'])->name('social_media');
Route::get('/learning/digital_tools/digital_marketing', [App\Http\Controllers\HomePageController::class, 'digital_marketing'])->name('digital_marketing');
Route::get('/learning/digital_tools/cybersecurity', [App\Http\Controllers\HomePageController::class, 'cybersecurity'])->name('cybersecurity');


// Soft Skills and Personal Development Routes
Route::get('/learning/soft_skills', [App\Http\Controllers\HomePageController::class, 'soft_skills'])->name('soft_skills');
Route::get('/learning/soft_skills/communication_techniques', [App\Http\Controllers\HomePageController::class, 'communication_techniques'])->name('communication_techniques');
Route::get('/learning/soft_skills/negotiation_skills', [App\Http\Controllers\HomePageController::class, 'negotiation_skills'])->name('negotiation_skills');
Route::get('/learning/soft_skills/stress_management', [App\Http\Controllers\HomePageController::class, 'stress_management'])->name('stress_management');
Route::get('/learning/soft_skills/handling_difficult_customers', [App\Http\Controllers\HomePageController::class, 'handling_difficult_customers'])->name('handling_difficult_customers');
Route::get('/learning/soft_skills/presentation_skills', [App\Http\Controllers\HomePageController::class, 'presentation_skills'])->name('presentation_skills');
Route::get('/learning/soft_skills/time_management', [App\Http\Controllers\HomePageController::class, 'time_management'])->name('time_management');


Route::get('/finance', [App\Http\Controllers\HomePageController::class, 'finance'])->name('finance');
Route::get('/partners', [App\Http\Controllers\HomePageController::class, 'partners'])->name('partners');
Route::get('/insight/our_insight', [App\Http\Controllers\HomePageController::class, 'our_insight'])->name('our_insight');
Route::get('/energy_glossary', [App\Http\Controllers\HomePageController::class, 'energy_glossary'])->name('energy_glossary');
Route::get('/energy_calculator', [App\Http\Controllers\HomePageController::class, 'energy_calculator'])->name('energy_calculator');
// Route::get('/courses', [App\Http\Controllers\HomePageController::class, 'courses'])->name('courses');
// Route::get('/courses_details', [App\Http\Controllers\HomePageController::class, 'courses_details'])->name('courses_details');
// Route::get('/courses_two', [App\Http\Controllers\HomePageController::class, 'courses_two'])->name('courses_two');
// Route::get('/kick_start', [App\Http\Controllers\HomePageController::class, 'kick_start'])->name('kick_start');
// Route::get('/login', [App\Http\Controllers\HomePageController::class, 'login'])->name('login');