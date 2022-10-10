@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">

          <div class="card-header">All Users</div>

          <table class="table">
            <thead>

            <tr>
              <th scope="col">Firstname</th>
              <th scope="col">Lastname</th>
              <th scope="col">Avatar</th>
              <th scope="col">Created At</th>
            </tr>

            </thead>
            <tbody>
            @foreach($users as $user)
              <tr>
                <th scope="row">{{ $user->first_name }}</th>
                <th scope="row">{{ $user->last_name }}</th>
                <td><img src="{{ $user->avatar  }}" style="height: 40px; width: 70px;"></td>
                <td>
                  @if($user->created_at == NULL)
                    <span class="text-danger"> No Data set</span>
                  @else
                    {{ Carbon\Carbon::parse($user->created_at)->diffForHumans()  }}
                  @endif
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
          {{ $users->links() }}

        </div>
      </div>

    </div>
  </div>
@endsection
