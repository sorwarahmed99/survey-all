<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use File;


class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.testimonials', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(AddTestimonialRequest $request)
    {
        $testimonial = new Testimonial;

    	$testimonial->name = $request->name;
    	$testimonial->position = $request->position;
    	$testimonial->description = $request->description;
        
    	 if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();  
            $image->move('uploads/', $imageName);
            $testimonial->image = 'uploads/' . $imageName;
        }
        $testimonial->save();

        return redirect()->back()->with('message',"Testimonial created");
    }

    public function show(Testimonial $testimonial)
    {
        return view('admin.testimonials.show');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
    	$testimonial->name = $request->name;
    	$testimonial->position = $request->position;
    	$testimonial->description = $request->description;
        
        if ($request->hasFile('image')) {
            $imagePath = public_path($testimonial->image);
            if(File::exists($imagePath)){
                File::delete($imagePath);
            }

            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();  
            $image->move('uploads/', $imageName);
            $testimonial->image = 'uploads/' . $imageName;
        }
        $testimonial->save();
        return redirect()->back()->with('message',"Testimonial updated");
    }

    public function destroy(Testimonial $testimonial)
    {
        $imagePath = public_path($testimonial->image);
        if(File::exists($imagePath)){
            File::delete($imagePath);
        }
        $testimonial->delete();
        return redirect()->back()->with('flash_message',"Team member deleted!");
    }
}
