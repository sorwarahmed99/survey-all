<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddPostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\PostViews;
use Illuminate\Http\Request;
use File;
use Str;

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

    public function store(AddPostRequest $request)
    {
        $post = new Post;

    	$post->title = $request->title;
    	$post->description = $request->description;
        $post->slug = Str::slug($request->title, "-");

    	 if ($request->hasFile('image')) {
       
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            $fileExtension = $image->getClientOriginalExtension();

            $image->move('uploads/', $fileName);

            $post->image = 'uploads/' . $fileName;
        }

    	// $post->is_published = $request->is_published;
        $post->save();
        return redirect()->back()->with('message',"Post created");
    }


    public function show(Post $post)
    {
        // if(!$post){
        //     return abort(400);
        // }
        return view('admin.blogs.show', compact('post'));
    }


    

    
    public function edit(Post $post)
    {
        // dd($post);
        return view('admin.blogs.edit', compact('post'));
    }

    
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
    	// $post->is_published = $request->is_published;
        $post->save();
        return redirect()->back()->with('message',"Post updated");
    }

   
    public function destroy(Post $post)
    {
        // $imagePath = public_path($post->image);
        // if(File::exists($imagePath)){
        //     File::delete($imagePath);
        // }
        $post->delete();
        return redirect()->back()->with('message',"Post deleted!");
    }
}
