@extends('layouts.backapp')
@section('title', 'Edit-Menu')
@section('pageTitle', 'Edit-Menu')
@section('main')
<section id="career">
    <div class="container">
        <div class="row">
            <form action="{{ route('menu.update',$menu->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class=" add-input my-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{ $menu->name }}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="route" placeholder="Enter route" value="{{ $menu->route }}">
                                @error('route')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 my-5 text-center">
                            <button type="submit" class="btn btn-success">Submit</button>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
