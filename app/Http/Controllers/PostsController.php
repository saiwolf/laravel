<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
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
