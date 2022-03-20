

<ul>
      @foreach ($users as $user)
        
        <div class="section"> 
          <div class="card" style="width: 18rem;"> 
          
           <img src="{{$user['avatar']}}" class="card-img-top" alt="face" />
          <div class="card-body">
           <h5> {{$user['first_name']}}</h5>
           <h5> {{$user['last_name']}}</h5>
           <a href="/">Back</a>
           </div>
          </div>
         </div>
       
        
      @endforeach
 </ul>





