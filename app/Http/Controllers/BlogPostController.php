<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BlogPostController extends Controller
{
    public function index()
{
    $blogPosts = BlogPost::all(); // Adjust as needed
    // dd($blogPosts);
    return view('posts.index', compact('blogPosts'));
}

    public function show(BlogPost $post)
    {
        $post->load('comments', 'reactions');
        return view('posts.show', compact('post'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'media' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $mediaPath = $request->file('media')->store('media', 'public');
    
        $post = new BlogPost([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'media_path' => $mediaPath,
        ]);
    
        $post->save();
    
        return redirect()->route('blog-posts.show', $post);
    }
    // Other CRUD methods...
}
