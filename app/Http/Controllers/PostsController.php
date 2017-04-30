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
        // Create a post using request data
        // and save it to the DB
       
        Post::create(request(['title', 'body']));    
        
        // Redirect somewhere.
        
        return redirect('/');
    }
}
