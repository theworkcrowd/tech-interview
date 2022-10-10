@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="card-group">
      {{--      <ul>--}}
        <div class="col-md-3 mt-5">
          <div class="card">
            {{--              <li>--}}
            <img src="{{$user->avatar}}" class="img-fluid" alt=""/>
            <b>Firstname: </b> {{$user->first_name}}
            <b>Lastname: </b>  {{$user->last_name}}
            <b>Created At: </b>  {{$user->created_at}}
            {{--              </li>--}}
          </div>
        </div>
      {{--      </ul>--}}
    </div>
  </div>
</div>
</div>
@endsection
