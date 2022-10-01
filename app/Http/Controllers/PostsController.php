<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::whereNull("deleted_at")
                        ->orderBy('id', 'DESC')->get();
        return response()->json($posts);
    }

    public function save(Request $request)
    {
        $posts=Posts::create([
            'user_id'     => $request->user_id,
            'description'     => $request->description,
          ]);
        return response()->json($posts);
    }
}
