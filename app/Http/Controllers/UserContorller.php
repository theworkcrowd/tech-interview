<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserContorller extends Controller
{
  
  
 public function show()
  {
    $data = User::paginate(5);
    return view('home',['users'=>$data]);
  }

  
       

   

   
  
}
