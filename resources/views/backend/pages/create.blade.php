@extends('layouts.backapp')
@section('title', 'Add')
@section('pageTitle', 'add')
@section('extraCss')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
@section('main')

    <div class="card col-lg-10 mx-auto">
        <div class="card-header text-center text-uppercase">
            <h3>Add page</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('page.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <select class="form-control" name="route_id">
                            <option selected>choose route</option>
                            @foreach ($menus as $item)
                            @foreach ($item->submenus as $value)
                                <option value="{{ $value->id }}" {{ old('route_id') == $value->id ? 'selected' : '' }}>{{ $value->name }}</option>
                            @endforeach
                            @endforeach
                        </select>
                        @error('route_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="inputTitle">Title:</label>
                        <input type="text" class="form-control" name="title" id="inputTitle"
                            placeholder="Input title here" value="{{ old('title') }}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="inputPicture">Picture:</label>
                        <input type="file" class="form-control" name="picture" id="inputPicture"
                            placeholder="Input picture here" value="{{ old('picture') }}">
                        @error('picture')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <label for="inputDetails">Description:</label>
                        <textarea name="description" id="inputDetails"></textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100 my-3">Add</button>
            </form>
        </div>
    </div>
@endsection
@section('extraScripts')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#inputDetails').summernote({
                placeholder: 'Describe Page Description here',
                height: 220
            });
        });
    </script>
@endsection
