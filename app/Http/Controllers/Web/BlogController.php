<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;

class BlogController extends Controller
{
    public function blog(){

        $posts = Post::orderBy('id','DESC')->where('status', 'PUBLISHED')->paginate(3);
        return view('web.posts',compact('posts'));
    }
}
