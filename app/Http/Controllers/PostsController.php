<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        
        return view('posts.index', compact('posts'));
    }
    
    public function show()
    {
        return view('posts.show');
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function store()
    {
        // Validate form data
        
        $this->validate(request(), [
            'title' => 'required',
            'body'  => 'required'
        ]);
        
        
        Post::create(request(['title', 'body']));    
        
        // Redirect somewhere.
        
        return redirect('/');
    }
}
