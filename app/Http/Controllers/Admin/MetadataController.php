<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostViews;
use App\Models\Service;
use App\Models\ServiceViews;
use Illuminate\Http\Request;

class MetadataController extends Controller
{
    public function postmetadata(Post $post)
    {
        $metas = PostViews::where('post_id', $post->id)->get();
        return view('admin.blogs.metadata', compact('post', 'metas'));
    }

    public function servicemetadata(Service $service)
    {
        $metas = ServiceViews::where('service_id', $service->id)->get();
        return view('admin.services.metadata', compact('service', 'metas'));
    }
}
