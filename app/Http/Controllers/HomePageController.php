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
   
    
}
