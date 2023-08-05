@extends('layouts.backapp')
@section('title', 'All-Menus')
@section('pageTitle', 'All-Menus')
@section('main')
<section id="career">
    <div class="container">
        <div class="row">
            <div>
                <a href="{{ route('submenu.create') }}" class="btn btn-primary mb-3">Create</a>
                @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
                @endif
                <table id="example" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>route name</th>
                            <th width="150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($submenus as $key => $value)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->route }}</td>
                            <td>
                                <a href="{{ route('submenu.edit',$value->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('submenu.destroy', $value->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" name="destroy">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>
@endsection
