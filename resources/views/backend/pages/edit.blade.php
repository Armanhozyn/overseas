@extends('layouts.backapp')
@section('title', 'Update')
@section('pageTitle', 'edit')
@section('extraCss')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
@section('main')
    <div class="card col-lg-10 mx-auto">
        <div class="card-header text-center text-uppercase">
            <h3>Update page</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('page.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="my-3">
                    <label for="inputTitle">Title:</label>
                    <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Input  Name here"
                        value="{{ $data->title }}">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputPicture">Picture:</label><br>
                    <img src="{{ asset('uploads/pages/' . $data->image) }}" alt="wellup overseas" class="img-fluid rounded" style="height: 150px;"><br><br>
                    <input type="hidden" name="old_picture" value="{{ $data->image }}">
                    <input type="file" class="form-control" name="picture" id="inputPicture"
                        placeholder="Input picture here" value="{{ old('picture') }}">
                    @error('picture')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputDetails">Description:</label>
                    <textarea name="description" id="inputDetails">{{ $data->description }}</textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100 my-3">Update</button>
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
