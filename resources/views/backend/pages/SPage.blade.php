@extends('layouts.backapp')
@section('title', 'PAGE')
@section('pageTitle', 'PAGE')
@section('main')
    <section id="page">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between mb-3">
                    <h3>TITLE:->{{ $page->title }}</h3>
                    <a class="btn btn-primary" href="{{ route('page.all') }}" role="button">view all pages</a>
                </div>
                <div class="col-lg-12">
                    <div class="card" style="">
                        <div class="no-gutters row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    <p class="card-text">{!! $page->description !!}</p>
                                    <form action="{{ route('page.status', $page->id) }}" method="POST"
                                        class="d-inline-block">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit"
                                            class="btn {{ $page->status == 0 ? 'btn-success' : 'btn-danger' }}"
                                            name="status">{{ $page->status == 0 ? 'Pause' : 'Resume' }}</button>
                                    </form>
                                    <form action="{{ route('page.destroy', $page->id) }}" method="POST"
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
