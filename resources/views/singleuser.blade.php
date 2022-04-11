@extends('layouts.app')

@section('content')

<!-- 5.a -->
<div class="container">
  <div class="row justify-content-center">
    
  <!-- Start - Single User Data -->
    
        <div class="card" style="width:250px" >
             <img style="float:center;" src="{{$user[0]['avatar']}}" style="width:200px;height:200px" alt="" />
              <div class="card-body">
                    <h5 class="card-title"> {{$user[0]['first_name']}}</h5>
                                            {{$user[0]['last_name']}}
                     
                  <br><button style="float:left;" onclick="window.location.href='/'" class="btn btn-success">Back to list</button>
              </div>
          </div>
    
   <!-- Start - End User Data -->

  
  </div>
</div>
@endsection
