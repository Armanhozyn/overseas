@extends('layouts.backapp')
@section('title', 'Running Careers')
@section('pageTitle', 'Running Careers')
@section('main')
<section id="career">
    <div class="container">
        <div class="row">
            @forelse ($careers as $data)
            <div class="col-12 text-center mb-3">
                <h3>RUNNING CAREERS</h3>
            </div>
            <div class="col-lg-12">
                <div class="card" style="">
                    <div class="no-gutters align-items-center row">
                        <a class="btn btn-primary" href="{{ route('SBCareer', $data->id) }}" role="button">view job
                            details</a>
                        <div class="col-md-12 text-center">
                            <div class="card-body">
                                <h5 class="h5 card-title">{{ $data->topic }}</h5>
                                <p class="card-text">
                                    {!! Str::limit($data->description, $limit = 1500, $end = '...') !!}
                                </p>
                                <p class="card-text"><small class="text-muted">{{ $data->date }}</small></p>
                                <form action="{{ route('career.status', $data->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn {{ $data->status == 0 ? 'btn-success' : 'btn-danger' }}" name="status">{{ $data->status == 0 ? 'Pause' : 'Resume' }}</button>
                                </form>
                                <form action="{{ route('career.destroy', $data->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" name="destroy">DESTROY</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <tr>
                <td colspan="5" class="text-uppercase h3 text-danger">No upcoming careers
                </td>
            </tr>
            @endforelse
        </div>
    </div>
</section>
@endsection
