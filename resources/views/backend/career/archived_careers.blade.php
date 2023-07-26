@extends('layouts.backapp')
@section('title', 'Archived Careers')
@section('pageTitle', 'Archived careers')
@section('main')
<section id="career">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="card border-0">
                        <div class="card-header text-center">
                            Archived Career Schedule
                        </div>
                        <div class="card-body text-center">
                            <div class="table-responsive career-table career-modal">
                                <table class="table table-striped mt-3 table-bordered">
                                    <thead class="thead-dark text-uppercase">
                                        <tr>
                                            <th scope="col">Topic</th>
                                            <th scope="col">description</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($careers as $data)
                                            <tr>
                                                <td>{{ $data->topic }}</td>
                                                <td>{!! $data->description !!}</td>
                                                <td>{{ $data->date }}</td>
                                                <td>{{ $data->time }}</td>
                                                <td>
                                                    <form action="{{ route('career.status', $data->id) }}" method="POST"
                                                        class="d-inline-block">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit"
                                                            class="btn {{ $data->status == 0 ? 'btn-success' : 'btn-danger' }}"
                                                            name="status">{{ $data->status == 0 ? 'Pause' : 'Resume' }}</button>
                                                    </form>
                                                    <form action="{{ route('career.destroy', $data->id) }}" method="POST"
                                                        class="d-inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"
                                                            name="destroy">DESTROY</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-uppercase h3 text-danger">No upcoming careers
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
