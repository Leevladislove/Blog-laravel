<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class BlogController extends Controller
{   
    public $post = [
        'id' => 1,
        'title' => 'Blog content',
        'content' => 'Lorem ipsum dolor sit amet consectetur <i>adipisicing elit</i>',
        'category_id' => 1,
    ];
     
    public function index(Request $request)
    {   
        $search = $request->search;
        $category_id = $request->category_id;
        
        $posts = array_fill(0, 6, (object) $this->post);

        $posts = array_filter($posts, function ($post) use ($search, $category_id) {
            if ($search && ! str_contains(strtolower($post->title), strtolower($search))) {
                return false;
            }


            if ($category_id && $post->category_id != $category_id) {
                return false;
            }

            return true;
        });

        $categories = [
            null =>  __('All categories'),
            1 => 'first category',
            2 => 'last category',
        ];

        return view('blog.index', compact('posts', 'categories'));
    }

    public function show()
    {   
        $post = (object) $this->post;
        return view('blog.show', compact('post'));
    }
}
