@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto mb-4">
                <div class="section-title text-center ">
                    <h3 class="top-c-sep">Here Are A List Of Users</h3>
                    <p>You can search users by firstname and surnname. click view user details to get more user info</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="career-search mb-60">
                    <div class="filter-result">
                        <p class="mb-30 ff-montserrat"></p>
                        @foreach ($users as $user)
                            <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                    <img src="{{ $user['avatar'] }}" class="avatar avatar-sm me-3">

                                    <div class="job-content">
                                        <h5 class="text-center text-md-left">
                                            {{ $user['first_name'] }}
                                            {{ $user['last_name'] }}</h5>
                                    </div>
                                </div>
                                <div class="job-right my-4 flex-shrink-0">
                                    <a href="#" class="btn d-block w-100 d-sm-inline-block btn-light"> View User Details</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex justify-content-center">{{ $users->links('pagination::bootstrap-4') }}</div>
                </div>
            </div>



        </div>

    </div>
@endsection
