<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function products()
    {
        return view('frontend.products');
    }

    public function remodelingBathroomHomes()
    {
        return view('frontend.service-details-remodeling-bathroom-homes');
    }

    public function interiorDesign()
    {
        return view('frontend.service-details-interior-design');
    }

    public function projectManagement()
    {
        return view('frontend.service-details-project-management');
    }

    public function cleaningServices()
    {
        return view('frontend.service-details-cleaning-services');
    }

    public function solarAnalysis()
    {
        return view('frontend.service-details-solar-analysis');
    }
}
