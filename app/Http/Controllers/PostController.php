<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show()
    {
        DB::table("posts")->where("id", 1)->delete();

        $posts = DB::table("posts")->get();
        return view("prod", compact("posts"));
    }
}
