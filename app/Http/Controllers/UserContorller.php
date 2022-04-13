<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserContorller extends Controller
{
    public function index()
    {
        $users = User::paginate(5);

        return view('home', compact('users'));
    }

    public function getSingleUser(Request $request)
    {
        $user = User::findOrFail($request->id);

        \Log::info($user);

        return view('viewuser', compact('user'));
    }
}
