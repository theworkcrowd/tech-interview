<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserContorller extends Controller
{
    public function index()
    {
        $users = User::paginate(5);

        return view('home', compact('users'));
    }
}