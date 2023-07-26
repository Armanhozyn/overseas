@extends('layouts.backapp')
@section('title', ' Add-Menu')
@section('pageTitle', 'Add-Menu')
@section('main')
<section id="career">
    <div class="container">
        <div class="row">
            <form action="{{ route('menu.store') }}" method="POST">
                @csrf
                <div class=" add-input my-3">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Enter Name">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" class="form-control" name="route" placeholder="Enter route">
                                @error('route')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2 my-3 text-center">
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
