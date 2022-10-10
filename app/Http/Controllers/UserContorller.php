<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use illuminate\Support\Carbon;

class UserContorller extends Controller
{
  public function index()
  {
    $users = User::latest()->paginate(5);
    return view('home', compact('users'));
  }

  public function storeUsers()
  {
    /**
     * Grab the users array
     */

    $users = [
      [
        'first_name' => 'Leonel',
        'last_name' => 'Hampton',
        'avatar' => 'https://i.pravatar.cc/150?img=19'
      ],
      [
        'first_name' => 'Lizbeth',
        'last_name' => 'Baldwin',
        'avatar' => 'https://i.pravatar.cc/150?img=32'
      ],
      [
        'first_name' => 'Reginald',
        'last_name' => 'Mcdaniel',
        'avatar' => 'https://i.pravatar.cc/150?img=69'
      ],
      [
        'first_name' => 'Josue',
        'last_name' => 'Villanueva',
        'avatar' => 'https://i.pravatar.cc/150?img=4'
      ],
      [
        'first_name' => 'Janet',
        'last_name' => 'Fuller',
        'avatar' => 'https://i.pravatar.cc/150?img=66'
      ],
      [
        'first_name' => 'Moriah',
        'last_name' => 'Hines',
        'avatar' => 'https://i.pravatar.cc/150?img=53'
      ],
      [
        'first_name' => 'Yazmin',
        'last_name' => 'Washington',
        'avatar' => 'https://i.pravatar.cc/150?img=52'
      ],
      [
        'first_name' => 'Logan',
        'last_name' => 'Powell',
        'avatar' => ''
      ],
      [
        'first_name' => 'Giovanni',
        'last_name' => 'Garcia',
        'avatar' => 'https://i.pravatar.cc/150?img=68'
      ],
      [
        'first_name' => 'Clare',
        'last_name' => 'Powell',
        'avatar' => 'https://i.pravatar.cc/150?img=34'
      ],
      [
        'first_name' => 'Urijah',
        'last_name' => 'Edwards',
        'avatar' => 'https://i.pravatar.cc/150?img=51'
      ]
    ];

    /**
     * Add users to the db using the model
     */
    foreach ($users as $user) {
      User::insert([
        'first_name' => $user['first_name'],
        'last_name' => $user['last_name'],
        'avatar' => $user['avatar'],
        'created_at' => Carbon::now()
      ]);
    }
  }
}
