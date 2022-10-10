@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="card-group">
{{--      <ul>--}}
        @foreach ($users as $user)
          <div class="col-md-3 mt-5">
            <div class="card">
{{--              <li>--}}
                <img src="{{$user['avatar']}}" class="img-fluid" alt=""/>
                <b>{{$user['first_name']}} {{$user['last_name']}}</b>
{{--              </li>--}}
            </div>
          </div>
        @endforeach
{{--      </ul>--}}
      </div>
    </div>
  </div>
@endsection
