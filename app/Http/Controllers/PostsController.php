<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Post $post)
    {
      return $post->get();
    // return 'unko';
    }
}
