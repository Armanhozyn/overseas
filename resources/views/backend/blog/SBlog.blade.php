@extends('layouts.backapp')
@section('title', 'BLOG')
@section('pageTitle', 'BLOG')
@section('main')
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <h3>TITLE:->{{ $blog->title }}</h3>
                </div>
                <div class="col-lg-12">
                    <div class="card" style="">
                        <div class="no-gutters align-items-center row">
                            <a class="btn btn-primary" href="{{ route('blog.all') }}" role="button">view all blogs</a>
                            <div class="col-md-12 text-center">
                                <div class="card-body">
                                    <p class="card-text">{{!! $blog->picture}}</p>
                                    <form action="{{ route('blog.status', $blog->id) }}" method="POST"
                                        class="d-inline-block">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit"
                                            class="btn {{ $blog->status == 0 ? 'btn-success' : 'btn-danger' }}"
                                            name="status">{{ $blog->status == 0 ? 'Pause' : 'Resume' }}</button>
                                    </form>
                                    <form action="{{ route('blog.destroy', $blog->id) }}" method="POST"
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
