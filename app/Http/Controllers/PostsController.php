<?php

namespace App\Http\Controllers;

use App\Posts;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::whereNull("deleted_at")
                        ->orderBy('id', 'ASC')->get();
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

    public function updateLikes(Request $request, Posts $posts)
    {
        $posts=[
            'likes'     => $request->likes+1,
            'id'     => $request->id,
        ];
        $posts->update($posts);
        return response()->json($posts, 200);
    }

    public function update(Request $request, Posts $posts)
    {
        $input = $request->all();
        $posts->update($input);
        return response()->json($posts, 200);
    }

    public function destroy(Posts $posts)
    {
        $posts->deleted_at = Carbon::now();
        $posts->update();
        return response()->json(array('success'=>true));
    }
}
