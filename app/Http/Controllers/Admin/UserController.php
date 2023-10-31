<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use File;
use Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->is_admin = 1;
        $user->password = Hash::make(Str::random(8));

        $user->save();

        return redirect()->route('admin.users.index')->with('message',"New user created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
    	$user->email = $request->email;
        $user->save();
        return redirect()->back()->with('message',"User updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $imagePath = public_path($user->image);
        if(File::exists($imagePath)){
            File::delete($imagePath);
        }
        $user->delete();
        return redirect()->back()->with('flash_message',"User deleted!");
    }
}
