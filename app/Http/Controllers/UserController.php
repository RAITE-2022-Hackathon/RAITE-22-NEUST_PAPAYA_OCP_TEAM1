<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index()
    {
        $users = User::whereNull("deleted_at")->get();
        return response()->json($users);
    }

    public function save(Request $request)
    {
        $input = $request->all();
        $users=User::create($input); 
        return response()->json($users);
    }

    public function update(Request $request, User $users)
    {
        $input = $request->all();
        $users->update($input);
        return response()->json($users, 200);
    }

    public function destroy(User $users)
    {
        $users->deleted_at = Carbon::now();
        $users->update();
        return response()->json(array('success'=>true));
    }
}
