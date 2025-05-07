<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Display the homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('Frontend.index');
    }

    public function about()
    {
        return view('Frontend.about');
    }

    public function solution()
    {
        return view('Frontend.solution.solution');
    }

    public function residential()
    {
        return view('Frontend.solution.residential_solutions');
    }

    public function business()
    {
        return view('Frontend.solution.business_solution');
    }

    public function industrial()
    {
        return view('Frontend.solution.industrial_solutions');
    }

    public function product()
    {
        return view('Frontend.solution.product_range');
    }


    public function faqs()
    {
        return view('Frontend.faqs');
    }

    public function contact()
    {
        return view('Frontend.contact');
    }

    public function our_ssn()
    {
        return view('Frontend.ssn.our_ssn');
    }

    public function career()
    {
        return view('Frontend.careers.career');
    }

    public function baltai()
    {
        return view('Frontend.careers.baltai_learning');
    }

    public function finance()
    {
        return view('Frontend.finance');
    }

    public function partners()
    {
        return view('Frontend.partners');
    }

    public function our_insight()
    {
        return view('Frontend.insight.our_insight');
    }
    
    public function energy_glossary()
    {
        return view('Frontend.energy_glossary');
    }

    public function energy_calculator()
    {
        return view('Frontend.energy_calculator');
    }

    // public function courses_details()
    // {
    //     return view('Frontend.careers.courses_details');
    // }  

    // public function courses()
    // {
    //     return view('Frontend.careers.courses');
    // } 

    // public function courses_two()
    // {
    //     return view('Frontend.careers.list.courses_two');
    // } 

    // public function kick_start()
    // {
    //     return view('Frontend.careers.kick_start');
    // } 

    // public function login()
    // {
    //     return view('Frontend.auth.login');
    // }  

    // Onboarding And Solar Basics Routes
    
    public function solar_basics()
    {
        return view('Frontend.careers.Onboarding.solar_basics');
    }
    public function company_introduction()
    {
        return view('Frontend.careers.Onboarding.Modules.company_introduction');
    }

    public function ssn_overview()
    {
        return view('Frontend.careers.Onboarding.Modules.ssn_overview');
    }

    public function solar_technology()
    {
        return view('Frontend.careers.Onboarding.Modules.solar_technology');
    }

    public function solar_energy_benefits()
    {
        return view('Frontend.careers.Onboarding.Modules.solar_energy_benefits');
    }

    public function onboarding_process()
    {
        return view('Frontend.careers.Onboarding.Modules.onboarding_process');
    }

    public function dress_code()
    {
        return view('Frontend.careers.Onboarding.Modules.dress_code');
    }

    public function communication()
    {
        return view('Frontend.careers.Onboarding.Modules.communication');
    }

    // Sales Techniques and Customer Acquisition Routes

    public function customer_acquisition()
    {
        return view('Frontend.careers.Sales.customer_acquisition');
    }

    public function solar_market()
    {
        return view('Frontend.careers.Sales.Modules.solar_market');
    }

    public function target_audiences()
    {
        return view('Frontend.careers.Sales.Modules.target_audiences');
    }

    public function lead_generation()
    {
        return view('Frontend.careers.Sales.Modules.lead_generation');
    }

    public function consultations()
    {
        return view('Frontend.careers.Sales.Modules.consultations');
    }

    public function pricing_models()
    {
        return view('Frontend.careers.Sales.Modules.pricing_model');
    }

    public function overcoming_objections()
    {
        return view('Frontend.careers.Sales.Modules.overcoming_objections');
    }

    public function developing_sales_pitches()
    {
        return view('Frontend.careers.Sales.Modules.developing_sales_pitches');
    }

    public function tracking_sales_performance()
    {
        return view('Frontend.careers.Sales.Modules.tracking_sales_performance');
    }
    

    // Solar Products and Financing Options Routes

    public function financing_options()
    {
        return view('Frontend.careers.Solar.financing_options');
    }

    public function solar_products()
    {
        return view('Frontend.careers.Solar.Modules.solar_products');
    }

    public function flexible_financing()
    {
        return view('Frontend.careers.Solar.Modules.flexible_financing');
    }

    public function customer_needs()
    {
        return view('Frontend.careers.Solar.Modules.customer_needs');
    }

    public function potential_savings()
    {
        return view('Frontend.careers.Solar.Modules.potential_savings');
    }

    public function solar_investments()
    {
        return view('Frontend.careers.Solar.Modules.solar_investments');
    }

    public function solar_packages()
    {
        return view('Frontend.careers.Solar.Modules.solar_packages');
    }


    // Customer Relationship Management Routes

    public function relationship_management()
    {
        return view('Frontend.careers.Management.relationship_management');
    }

    public function customer_engagement()
    {
        return view('Frontend.careers.Management.Modules.customer_engagement');
    }

    public function customer_feedback()
    {
        return view('Frontend.careers.Management.Modules.customer_feedback');
    }

    public function continued_satisfaction()
    {
        return view('Frontend.careers.Management.Modules.continued_satisfaction');
    }

    public function new_leads()
    {
        return view('Frontend.careers.Management.Modules.new_leads');
    }

    public function resolving_complaints()
    {
        return view('Frontend.careers.Management.Modules.resolving_complaints');
    }

    public function customer_loyalty()
    {
        return view('Frontend.careers.Management.Modules.customer_loyalty');
    }

    // Technical Knowledge for SRMs Routes

    public function technical_knowledge()
    {
        return view('Frontend.careers.Technical.technical_knowledge');
    }

    public function solar_panel_basics()
    {
        return view('Frontend.careers.Technical.Modules.solar_panel_basics');
    }

    public function battery_storage_systems()
    {
        return view('Frontend.careers.Technical.Modules.battery_storage_systems');
    }

    public function installation_process()
    {
        return view('Frontend.careers.Technical.Modules.installation_process');
    }

    public function monitoring_performance()
    {
        return view('Frontend.careers.Technical.Modules.monitoring_performance');
    }
    
    public function troubleshooting()
    {
        return view('Frontend.careers.Technical.Modules.troubleshooting');
    }

    public function maintenance_warranty()
    {
        return view('Frontend.careers.Technical.Modules.maintenance_warranty');
    }


    // Compliance and Ethical Standards Routes

    public function compliance()
    {
        return view('Frontend.careers.Compliance.compliance');
    }

    public function industry_regulations()
    {
        return view('Frontend.careers.Compliance.Modules.industry_regulations');
    }

    public function government_incentives()
    {
        return view('Frontend.careers.Compliance.Modules.government_incentives');
    }

    public function environmental_compliance()
    {
        return view('Frontend.careers.Compliance.Modules.environmental_compliance');
    }

    public function ethical_standards()
    {
        return view('Frontend.careers.Compliance.Modules.ethical_standards');
    }

    public function customer_data_privacy()
    {
        return view('Frontend.careers.Compliance.Modules.customer_data_privacy');
    }

    public function documentation()
    {
        return view('Frontend.careers.Compliance.Modules.documentation');
    }


    // Digital Tools and Technology Routes

    public function digital_tools()
    {
        return view('Frontend.careers.Digital.digital_tools');
    }

    public function crm_tools()
    {
        return view('Frontend.careers.Digital.Modules.crm_tools');
    }

    public function lead_tracking()
    {
        return view('Frontend.careers.Digital.Modules.lead_tracking');
    }

    public function solar_system_design()
    {
        return view('Frontend.careers.Digital.Modules.solar_system_design');
    }

    public function social_media()
    {
        return view('Frontend.careers.Digital.Modules.social_media');
    }

    public function digital_marketing()
    {
        return view('Frontend.careers.Digital.Modules.digital_marketing');
    }

    public function cybersecurity()
    {
        return view('Frontend.careers.Digital.Modules.cybersecurity');
    }

    // Soft Skills and Personal Development Routes
    
    public function soft_skills()
    {
        return view('Frontend.careers.Soft.soft_skills');
    }
    
    public function communication_techniques()
    {
        return view('Frontend.careers.Soft.Modules.communication_techniques');
    }

    public function negotiation_skills()
    {
        return view('Frontend.careers.Soft.Modules.negotiation_skills');
    }

    public function stress_management()
    {
        return view('Frontend.careers.Soft.Modules.stress_management');
    }

    public function handling_difficult_customers()
    {
        return view('Frontend.careers.Soft.Modules.handling_difficult_customers');
    }

    public function presentation_skills()
    {
        return view('Frontend.careers.Soft.Modules.presentation_skills');
    }

    public function time_management()
    {
        return view('Frontend.careers.Soft.Modules.time_management');
    }
}
