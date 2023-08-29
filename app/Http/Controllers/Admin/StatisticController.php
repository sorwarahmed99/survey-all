<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StatisticRequest;
use App\Http\Requests\UpdateStatisticRequest;
use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stats = Statistic::all();
        return view('admin.stats.index', compact('stats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stats = Statistic::all();
        return view('admin.stats.create', compact('stats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StatisticRequest $request)
    {
        $stats = Statistic::all();
        if(count($stats) <= 3){
            Statistic::create($request->validated());
        } else {
            return redirect()->route('admin.stats.index')->withErrors(['message' => "No more space available!"]);
            // return Redirect::back()->withErrors(['msg' => 'The Message']);
        }
        return redirect()->route('admin.stats.index')->with('message',"Statistic added");
    }

    /**
     * Display the specified resource.
     */
    public function show(Statistic $stat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statistic $stat)
    {
        return view('admin.stats.edit', compact('stat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStatisticRequest $request, Statistic $stat)
    {
        $stat->update($request->validated());
        return redirect()->route('admin.stats.index')->with('message',"Statistic updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statistic $stat)
    {
        $stat->delete();
        return redirect()->route('admin.stats.index')->with('message',"Statistic deleted!");
    }
}
