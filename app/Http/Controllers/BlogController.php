<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class BlogController extends Controller
{   
    public $post = [
        'id' => 1,
        'title' => 'Blog content',
        'content' => 'Lorem ipsum dolor sit amet consectetur <i>adipisicing elit</i>',
    ];
    
    public function index()
    {   
        $posts = array_fill(0, 6, (object) $this->post);
        return view('blog.index', compact('posts'));
    }

    public function show()
    {   
        $post = (object) $this->post;
        return view('blog.show', compact('post'));
    }
}
