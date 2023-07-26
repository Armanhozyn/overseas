@extends('layouts.backapp')
@section('title', ' Add-Menu')
@section('pageTitle', 'Add-Menu')
@section('main')
<section id="career">
    <div class="container">
        <div class="row">
            <form action="{{ route('submenu.store') }}" method="POST">
                @csrf
                <div class=" add-input my-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control" name="menu_id">
                                    <option selected>choose main menu</option>
                                    @foreach ($mainmenus as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleFormControlInput2" name="name" placeholder="Enter Name">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleFormControlInpu3" name="route" placeholder="Enter route" value="#">
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
