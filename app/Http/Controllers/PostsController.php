<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    // Index.
    public function index()
    {
		$posts = Posts::orderBy( 'created_at', 'desc' )->get();
        return view( 'posts.index', compact( 'posts' ) );
    }

	// Show.
	public function show( $slug )
	{
		$post = Posts::where( 'slug', $slug )->firstOrFail();
		return view( 'posts.show', compact( 'post' ) );
	}
}
