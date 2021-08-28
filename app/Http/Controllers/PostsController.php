<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->getPaginateByLimit()]);  
    }
}
?>