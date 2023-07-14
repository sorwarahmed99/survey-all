<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddPostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use File;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.blogs.posts', compact('posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddPostRequest $request)
    {
        $post = new Post;

    	$post->title = $request->title;
    	$post->description = $request->description;
    	 if ($request->hasFile('image')) {
       
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $fileExtension = $image->getClientOriginalExtension();

            $image->move('uploads/', $fileName);

            $post->image = 'uploads/' . $fileName;
        }

    	$post->is_published = $request->is_published;
        $post->save();
        return redirect()->back()->with('message',"Post created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.blogs.show', compact('post'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.blogs.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->title = $request->title;
    	$post->description = $request->description;
        
        if ($request->hasFile('image')) {
            $imagePath = public_path($post->image);
            if(File::exists($imagePath)){
                File::delete($imagePath);
            }
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension();  
            $image->move('uploads/', $imageName);
            $post->image = 'uploads/' . $imageName;
        }
    	$post->is_published = $request->is_published;
        $post->save();
        return redirect()->back()->with('message',"Post updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $imagePath = public_path($post->image);
        if(File::exists($imagePath)){
            File::delete($imagePath);
        }
        $post->delete();
        return redirect()->back()->with('message',"Post deleted!");
    }
}
