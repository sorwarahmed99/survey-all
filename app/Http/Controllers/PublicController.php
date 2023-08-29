<?php

namespace App\Http\Controllers;

use App\Events\BookingCreated;
use App\Events\ContactCreated;
use App\Http\Requests\BookingRequest;
use App\Http\Requests\BookingSteps;
use App\Http\Requests\ContactRequest;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Service;
use App\Models\Statistic;
use App\Models\SurveyCoverageArea;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Str;

class PublicController extends Controller
{
    public function index()
    {
        $stats = Statistic::all();
        $testimonials = Testimonial::all();
        $services = Service::all();
        return view('welcome', compact('services', 'testimonials', 'stats'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        $contact = Contact::create($request->validated());
        event(new ContactCreated($contact));

        return redirect()->back()->with('success',"Thank you for contacting us, we will get back to you as soon as possible.");
    }

    public function blogs()
    {
        $posts = Post::all();
        return view('blogs', compact('posts'));
    }

    public function show(Post $post) {
        $posts = Post::all();
        return view('singlepost', compact('post', 'posts'));
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

    public function searchCoverage(Request $request)
    {
        $postcode = $request->input('postcode');
        $coverageAreas = SurveyCoverageArea::where('name', 'LIKE', '%' . $postcode . '%')->get();
        return response()->json($coverageAreas);
    }

    public function booking()
    {
        $services = Service::all();
        return view('booking', compact('services'));
    }
    
    public function bookingstore(BookingRequest $request)
    {
        $slug = \Str::slug($request->name);
        $check = Booking::whereSlug($slug)->first();
        if($check){
            $slug = $slug . '-' . $check->id .rand(1000, 9999);
        }
        
        $booking = Booking::create([
            'area_or_postcode' => $request->area_or_postcode,
            'name' => $request->name,
            'slug' => $slug. '-' .rand(1000, 9999),
            'email' => $request->email,
            'phone' => $request->phone,
            'instruction' => $request->instruction,
        ]);
        return redirect()->route('booking.step-2', $booking);
    }

    public function bookingstep2(Booking $booking){
        $services = Service::all();
        return view('booking-step-2', compact('booking'));
    }
    
    public function bookingstep2store(BookingSteps $request, Booking $booking){
        // dd($request->all());
        if($request->job_type == 'RICS Home Survey') {
            $booking->update([
                'job_type' => $request->job_type,
                'survey_type' => $request->survey_type,
            ]);
            // return redirect()->route('booking.confirmed');

        } else if ($request->job_type == 'RICS Home Valuation'){
            $booking->update([
                'job_type' => $request->job_type,
                'valuation_reason' => $request->val_reason, 
                'valuation_other_reason' => $request->val_other_reason,
                'valuation_for_lending_purpose' => $request->val_for_lending_purpose,
            ]);
            // return redirect()->route('booking.confirmed');

        } else {
            $booking->update([
                'job_type' => $request->job_type,
            ]);
        }  
       
        event(new BookingCreated($booking));
        return redirect()->route('booking.confirmed');
    }
    
    public function bookingConfirmed (){
        return view('booking-confirmed');
    }

    public function service(Service $service) {
        $services = Service::all();
        return view('service', compact('service', 'services'));
    }

    public function aboutus()
    {
        $stats = Statistic::all();
        $teams = Team::all();
        return view('about', compact('stats', 'teams'));
    }
}
