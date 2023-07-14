<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;
use File;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.teams.teams', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddTeamRequest $request)
    {
        
        $team = new Team;

    	$team->name = $request->name;
    	$team->position = $request->position;

    	 if ($request->hasFile('image')) {
       
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            // $fileExtension = $image->getClientOriginalExtension();
            $imageName = time().'.'.$image->extension();  

            $image->move('uploads/', $imageName);

            $team->image = 'uploads/' . $imageName;
        }

        $team->save();


        // $imageName = time().'.'.$request->image->extension();  
        // $request->image->move(public_path('public/uploads'), $imageName);
        // Team::create($request->validated());

        return redirect()->route('admin.teams.index')->with('message',"Team member added");
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        // $team->update($request->validated());
        

    	$team->name = $request->name;
    	$team->position = $request->position;
        
        if ($request->hasFile('image')) {

            $imagePath = public_path($team->image);
            if(File::exists($imagePath)){
                File::delete($imagePath);
            }

            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();  
            $image->move('uploads/', $imageName);
            $team->image = 'uploads/' . $imageName;

            
        }

        

        $team->save();

        return redirect()->back()->with('message',"Team member updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $imagePath = public_path($team->image);
        if(File::exists($imagePath)){
            File::delete($imagePath);
        }
        $team->delete();
        return redirect()->back()->with('flash_message',"Team member deleted!");
    }
}
