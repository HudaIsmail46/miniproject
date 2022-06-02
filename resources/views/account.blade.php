@extends('app')
@section('page title', 'My Account')
@section('content')

    <div class="container m-0">
        <div class="row justify-content-between align-items-center">
            <div class="col-6">

                <div class="card">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{ url('/images/user.png') }}"
                                alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">{{ $user->name }}</h3>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item justify-content-between">
                               <a href="/editmyuser?rid={{ session()->get('user')->id }}" class="float-right text-dark text-decoration-none"> <b>Login Details</b> </a>
                            <p class="text-end">arrow</p>
                            </li>
                            <li class="list-group-item">
                                <b>Personal Information</b> <a class="float-right"></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-6">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Login Details</h4>
                    </div>

                    <div class="card-body">
                        <strong><i class="fa-solid fa-envelope"></i> Email</strong>
                        <p class="text-muted">
                            {{ $user->email }}
                        </p>
                        <hr>
                        <strong><i class="fa-solid fa-phone"></i> Phone Number</strong>
                        <p class="text-muted">
                            {{ $user->email }}
                        </p>
                        <hr>
                        <strong><i class="fa-solid fa-key"></i></i> Password</strong>
                        <p class="text-muted">
                            {{ $user->password }}
                        </p>
                    </div>

                </div>
            </div>
        </div>

    @endsection
