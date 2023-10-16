<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    // Index.
    public function index()
    {
        return view('posts.index');
    }
}
