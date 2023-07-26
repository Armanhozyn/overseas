@extends('layouts.backapp')
@section('title', 'Dashboard')
@section('pageTitle', 'Dashboard')
@section('main')
<div class="row">
    <div class="col-xl-4 mx-auto mt-5">
        <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p>Dashboard</p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="{{ asset('backend/images/profile-img.png') }}" alt="wellup overseas" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
