@extends('layouts.app')

@section('content')
    {{-- <div class="container"> --}}
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card p-3 py-4">
                    <div class="text-center"> <img src="{{ $user['avatar'] }}" alt="user-image" width="100"
                            class="rounded-circle"> </div>
                    <div class="text-center mt-3">
                        <h5 class="mt-2 mb-0">{{ $user['first_name'] }} {{ $user['last_name'] }}</h5>
                        <div class="buttons  mt-3">
                            <button class="btn btn-outline-primary px-4">Message</button>
                            <button class="btn btn-primary px-4 ms-3">Contact</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
@endsection
