@extends('app')
@section('content')
    @if (session()->has('user'))
        <div class="container m-0">
            <div class="col">
                <h3 class="text-center"> Welcome to HUAWEI!</h3>
                <h5 class="text-center">logged in as {{ session()->get('user')->email }} 
                <a href="/editmyuser?rid={{ session()->get('user')->id }}">Edit Profile</a></h5>
            </div>
        </div>
    @endif
    <img class="bd-placeholder-img" width="100%" role="img" src="{{ url('/images/banner.png') }}">
@endsection
