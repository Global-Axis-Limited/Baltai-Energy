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

    public function faqs()
    {
        return view('Frontend.faqs');
    }

    public function contact()
    {
        return view('Frontend.contact');
    }

    public function ssn()
    {
        return view('Frontend.our-ssn');
    }
}
