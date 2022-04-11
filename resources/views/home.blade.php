@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
  
  <!-- Start User Loop -->
      @foreach ($users as $user)
    
        <div class="card" style="width:250px" >
             <img style="float:center;" src="{{$user['avatar']}}" style="width:200px;height:200px" alt="" />
              <div class="card-body">
                    <h5 class="card-title"> {{$user['first_name']}}</h5>
                    {{$user['last_name']}}

                    <!-- 5.b -->
                  <br><button style="float:left;" onclick="window.location.href='/singleuser/{{$user['id']}}'" class="btn btn-success">View User details</button>
              </div>
          </div>
    
      @endforeach

  <!-- End User Loop -->

  <!-- Start Pagination -->
  <!--  4.e -->

               <center>
                <?php 

                echo " ". "<br>"; 
                echo $users->render(); 
                ?>
                </center>
  
  <!-- End Pagination -->

  </div>
</div>
@endsection
