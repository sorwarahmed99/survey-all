<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.services', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddServiceRequest $request)
    {
        $service = new Service;

    	$service->title = $request->title;
    	$service->description = $request->description;
        $service->slug = Str::slug($request->title, "-");

    	 if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();  
            $image->move('uploads/', $imageName);
            $service->image = 'uploads/' . $imageName;
        }
        $service->save();

        return redirect()->back()->with('message',"Service created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $service->title = $request->title;
    	$service->description = $request->description;
        
        if ($request->hasFile('image')) {
            $imagePath = public_path($service->image);
            if(File::exists($imagePath)){
                File::delete($imagePath);
            }

            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();  
            $image->move('uploads/', $imageName);
            $service->image = 'uploads/' . $imageName;
        }
        $service->save();
        return redirect()->back()->with('message',"Service updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $imagePath = public_path($service->image);
        if(File::exists($imagePath)){
            File::delete($imagePath);
        }
        $service->delete();
        return redirect()->back()->with('flash_message',"Service deleted!");
    }
}
