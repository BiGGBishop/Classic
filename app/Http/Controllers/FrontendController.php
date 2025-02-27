<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Product;
use App\Models\Purchase;

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
        $services = Service::all();
        return view('frontend.services', compact('services'));
    }

    public function servicesShow($id) {
        $service = Service::findOrFail($id);
        $allServices = Service::all();
        return view('frontend.service-details', compact('service', 'allServices'));
    }

    public function products()
    {
        $products = Product::all();
        return view('frontend.products', compact('products'));
    }

    public function productsShow($id) {
        $product = Product::findOrFail($id);
        $allProducts = Product::all();
        return view('frontend.product-details', compact('product', 'allProducts'));
    }

    public function purchaseStore(Request $request) {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255'
        ]);

        Purchase::create($request->all());

        return back()->with('success', 'Purchase request submitted successfully.');
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
