@extends('layouts.backapp')
@section('title', 'Update career')
@section('pageTitle', 'edit career')
@section('main')
    <div class="card col-lg-10 mx-auto">
        <div class="card-header text-center text-uppercase">
            <h3>Update career page</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('career.update', $career->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="my-3">
                    <label for="inputName">career Name:</label>
                    <input type="text" class="form-control" name="topic" id="inputName"
                        placeholder="Input career Name here" value="{{ $career->topic }}">
                    @error('topic')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="inputDate">career Date:</label>
                    <input type="date" class="form-control" name="date" id="inputDate"
                        placeholder="Input career Date here" value="{{ $career->date }}">
                    @error('date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="my-3">
                    <label for="inputTime">career Time:</label>
                    <input type="time" class="form-control" name="time" id="inputTime"
                        placeholder="Input career Time here" value="{{ $career->time }}">
                    @error('time')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-primary w-100 my-3">Update career</button>
            </form>
        </div>
    </div>
@endsection
@section('custom_script')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection
