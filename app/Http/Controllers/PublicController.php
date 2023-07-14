<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Http\Requests\ContactRequest;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Service;
use App\Models\SurveyCoverageArea;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        $services = Service::all();
        return view('welcome', compact('services', 'testimonials'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->validated());
        return redirect()->back()->with('message',"Thank you for contacting us, we will get back to you as soon as possible.");
    }

    public function blogs()
    {
        $posts = Post::all();
        return view('blogs', compact('posts'));
    }

    public function show(Post $post) {

    }

    public function services()
    {
        $services = Service::all();
        return view('services', compact('services'));
    }

    public function areas()
    {
        $areas = SurveyCoverageArea::all();
        return view('areas', compact('areas'));
    }


    public function booking()
    {
        $services = Service::all();
        return view('booking', compact('services'));
    }

    
    public function bookingstore(BookingRequest $request)
    {
        Booking::create($request->validated());
        return redirect()->back()->with('message',"Thank you for contacting us, we will get back to you as soon as possible.");
    }


    public function service(Service $service) {
        $services = Service::all();
        
        return view('service', compact('service', 'services'));
    }


    public function aboutus()
    {
        return view('about');
    }

    

}
