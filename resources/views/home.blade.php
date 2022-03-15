@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <ul>
      @foreach ($users as $user)
        <li>
          <img src="{{$user['avatar']}}" style="width:60px" alt="" />
          {{$user['first_name']}}
          {{$user['last_name']}}
        </li>
      @endforeach
    </ul>
  </div>
</div>
@endsection
