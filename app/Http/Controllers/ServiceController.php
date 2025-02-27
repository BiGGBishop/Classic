<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    // Display a listing of the services
    public function index()
    {
        $services = Service::paginate(10);
        return view('services.index', compact('services'));
    }

    // Show the form for creating a new service
    public function create()
    {
        return view('services.create');
    }

    // Store a newly created service in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $uniqueName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/services'), $uniqueName);
            $imagePath = 'uploads/services/' . $uniqueName;
        }

        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    // Display the specified service
    public function show(Service $service)
    {
        return view('services.show', compact('service'));
    }

    // Show the form for editing the specified service
    public function edit(Service $service)
    {
        return view('services.edit', compact('service'));
    }

    // Update the specified service in the database
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($service->image && File::exists(public_path($service->image))) {
                File::delete(public_path($service->image));
            }
            $image = $request->file('image');
            $uniqueName = time() . '_' . Str::random(10) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/services'), $uniqueName);
            $service->image = 'uploads/services/' . $uniqueName;
        }

        $service->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $service->image,
        ]);

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    // Remove the specified service from the database
    public function destroy(Service $service)
    {
        if ($service->image && File::exists(public_path($service->image))) {
            File::delete(public_path($service->image));
        }
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}