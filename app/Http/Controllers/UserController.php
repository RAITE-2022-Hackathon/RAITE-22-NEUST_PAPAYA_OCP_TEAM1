<?php

namespace App\Http\Controllers;

use App\User;
use App\Roles;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index()
    {
        $users = User::whereNull("deleted_at")->get();
        return response()->json($users);
    }

    public function list()
    { 
        $roles= Roles::where('display_name','!=', 'Administrator')
                    ->whereNull('deleted_at')
                        ->orderby('id', 'asc')
                        ->get();
        return response()->json($roles);
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
