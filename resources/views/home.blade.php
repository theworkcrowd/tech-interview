@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
  
  

  
    <ul>
      @foreach ($users as $user)
        
        <div class="section"> 
          <div class="card" style="width: 18rem;"> 
          
           <img src="{{$user['avatar']}}" class="card-img-top" alt="" />
          <div class="card-body">
           <h5> {{$user['first_name']}}</h5>
           <h5> {{$user['last_name']}}</h5>
           <a href="details" class="btn btn-primary">More Info</a>
           </div>
          </div>
         </div>
       
        
      @endforeach
     </ul>
    
  </div>

</div>
<span>{{$users->links()}}</span>

<style>
  .w-5{
    display: none;
  }

 
</style>



@endsection
