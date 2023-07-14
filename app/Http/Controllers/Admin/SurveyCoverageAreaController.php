<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddAreaRequest;
use App\Http\Requests\UpdateAreaRequest;
use App\Models\SurveyCoverageArea;
use Illuminate\Http\Request;

class SurveyCoverageAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = SurveyCoverageArea::all();
        return view('admin.areas.areas', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.areas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddAreaRequest $request)
    {
        SurveyCoverageArea::create($request->validated());
        return redirect()->back()->with('message',"Area added");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SurveyCoverageArea $coverage_area)
    {
        return view('admin.areas.edit', compact('coverage_area'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAreaRequest $request, SurveyCoverageArea $coverage_area)
    {
        $coverage_area->update($request->validated());
        return redirect()->back()->with('message',"Area updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SurveyCoverageArea $coverage_area)
    {
        $coverage_area->delete();
        return redirect()->back()->with('message',"Area deleted");
    }
}
