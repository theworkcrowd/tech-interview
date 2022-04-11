<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserContorller extends Controller
{
  public function index()
  {

   
    // start - hardcoded array ---------------------------------------------------------


    // $users = [
    //   [
    //     'first_name' => 'Leonel',
    //     'last_name' => 'Hampton',
    //     'avatar' => 'https://i.pravatar.cc/150?img=19'
    //   ],
    //   [
    //     'first_name' => 'Lizbeth',
    //     'last_name' => 'Baldwin',
    //     'avatar' => 'https://i.pravatar.cc/150?img=32'
    //   ],
    //   [
    //     'first_name' => 'Reginald',
    //     'last_name' => 'Mcdaniel',
    //     'avatar' => 'https://i.pravatar.cc/150?img=69'
    //   ],
    //   [
    //     'first_name' => 'Josue',
    //     'last_name' => 'Villanueva',
    //     'avatar' => 'https://i.pravatar.cc/150?img=4'
    //   ],
    //   [
    //     'first_name' => 'Janet',
    //     'last_name' => 'Fuller',
    //     'avatar' => 'https://i.pravatar.cc/150?img=66'
    //   ],
    //   [
    //     'first_name' => 'Moriah',
    //     'last_name' => 'Hines',
    //     'avatar' => 'https://i.pravatar.cc/150?img=53'
    //   ],
    //   [
    //     'first_name' => 'Yazmin',
    //     'last_name' => 'Washington',
    //     'avatar' => 'https://i.pravatar.cc/150?img=52'
    //   ],
    //   [
    //     'first_name' => 'Logan',
    //     'last_name' => 'Powell',
    //     'avatar' => ''
    //   ],
    //   [
    //     'first_name' => 'Giovanni',
    //     'last_name' => 'Garcia',
    //     'avatar' => 'https://i.pravatar.cc/150?img=68'
    //   ],
    //   [
    //     'first_name' => 'Clare',
    //     'last_name' => 'Powell',
    //     'avatar' => 'https://i.pravatar.cc/150?img=34'
    //   ],
    //   [
    //     'first_name' => 'Urijah',
    //     'last_name' => 'Edwards',
    //     'avatar' => 'https://i.pravatar.cc/150?img=51'
    //   ]
    // ];

 // end - hardcoded array --------------------------------------------------------------


 // 4.c)

// start - insert array values ---------------------------------------------------------
    $count = count($users);
    for($i=0;$i<$count;$i++)
       {
          $user = User::create([
            'first_name'  =>  $users[$i]['first_name'],
            'last_name'   =>  $users[$i]['last_name'],
            'avatar'      =>  $users[$i]['avatar'],
            'created_at'  =>  date("Y-m-d H:i:s",strtotime('2 hour')),
          ]);
      }
// end - insert array values -------------------------------------------------------------


 //4.d)

    // start - select all from users -----------------------------------------------------
        $users = User::simplePaginate(5);  // 4.e
    // end - select all from users   -----------------------------------------------------

     return view('home', compact('users'));

  }



//5.a
  public function singleuser(Request $request,$id)
  {
    $user = User::where('id',$id)->get();
    return view('singleuser', compact('user'));
  }

}
