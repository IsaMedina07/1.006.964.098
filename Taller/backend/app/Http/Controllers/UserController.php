<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return response()->json($user);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return response()->json('Usuario creado', 201);
    }

}
