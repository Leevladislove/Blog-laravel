<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PostController extends Controller
{   
    public $post = [
        'id' => 1,
        'title' => 'User content',
        'content' => 'Lorem ipsum dolor sit amet consectetur <strong>adipisicing elit</strong>',
    ];

    public function index()
    {   
        $posts = array_fill(0, 6, (object) $this->post);
        return view('user.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function store()
    {
        return view('user.posts.store');
    }

    public function show($post)
    {   
        $post = (object) $this->post;
        return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {   
        $post = (object) $this->post;
        return view('user.posts.edit', compact('post'));
    }

    public function update($post)
    {
        return 'Update post: ' . $post;
    }

    public function delete($post)
    {
        return 'Deleted post: ' . $post;
    }

}
