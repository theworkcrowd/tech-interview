<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DetailsController extends Controller
{
    public function show()
    {
      $data = User::paginate(1);
      return view('details',['users'=>$data]);
    }
  
}
