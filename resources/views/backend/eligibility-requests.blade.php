@extends('layouts.backapp')
@section('title', 'Requested Info')
@section('pageTitle', 'Requested Info')
@section('main')
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card overflow-hidden">
                <div class="card-body pt-3">
                    <table id="example" class="table table-striped table-bordered display" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Marital Status</th>
                                <th>Incom</th>
                                <th>Email</th>
                                <th>Occupation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $key => $data)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td>{{ $data->marital == 1 ? 'Married' : 'Unmarried' }}</td>
                                    <td>{{ $data->income }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{!! $data->occupation !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
