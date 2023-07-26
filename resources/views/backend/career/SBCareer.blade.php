@extends('layouts.backapp')
@section('title', 'Running Careers')
@section('pageTitle', 'Running Careers')
@section('main')
<section id="career">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <h3>RUNNING CAREERS</h3>
                </div>
                    <div class="col-lg-12">
                        <div class="card" style="">
                            <div class="no-gutters align-items-center row">
                                <a class="btn btn-primary" href="{{ route('career.all') }}" role="button">view all job</a>
                                <div class="col-md-12 text-center">
                                    <div class="card-body">
                                        <h5 class="h5 card-title">{{ $career->topic }}</h5>
                                        <p class="card-text">{!! $career->description !!}</p>
                                        <p class="card-text"><small class="text-muted">{{ $career->date }}</small></p>
                                        <form action="{{ route('career.status', $career->id) }}" method="POST"
                                            class="d-inline-block">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                class="btn {{ $career->status == 0 ? 'btn-success' : 'btn-danger' }}"
                                                name="status">{{ $career->status == 0 ? 'Pause' : 'Resume' }}</button>
                                        </form>
                                        <form action="{{ route('career.destroy', $career->id) }}" method="POST"
                                            class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" name="destroy">DESTROY</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>

@endsection
