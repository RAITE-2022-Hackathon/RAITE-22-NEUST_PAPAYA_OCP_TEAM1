<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::whereNull("deleted_at")->get();
        return response()->json($posts);
    }
}
