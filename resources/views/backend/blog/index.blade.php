@extends('layouts.backapp')
@section('title', 'BLOGS')
@section('pageTitle', 'BLOGS')
@section('main')
    <section id="career">
        <div class="container">
            <div class="row">
                @forelse ($blogs as $data)
                    <div class="col-md-4">
                        <div class="card" style="">
                            <div class="no-gutters align-items-center row">
                                <a class="btn btn-primary" href="{{ route('SBlog', $data->id) }}" role="button">view blog
                                    details</a>
                                <div class="col-md-12 text-center">
                                    <div class="card-body">
                                        <h5 class="h5 card-title">{{ $data->title }}</h5>
                                        <img src="{{ asset('storage/img/blogs/' . $data->picture) }}" alt="wellup overseas" class="img-fluid">
                                        {{-- <p class="card-text">
                                            {!! Str::limit($data->description, $limit = 1500, $end = '...') !!}
                                        </p> --}}
                                        <p class="card-text"><small class="text-muted">{{ $data->created_at }}</small></p>
                                        <a class="btn btn-primary" href="{{ route('blog.edit', $data->id) }}" role="button">EDIT</a>
                                        <form action="{{ route('blog.status', $data->id) }}" method="POST"
                                            class="d-inline-block">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"
                                                class="btn {{ $data->status == 0 ? 'btn-success' : 'btn-danger' }}"
                                                name="status">{{ $data->status == 0 ? 'Pause' : 'Resume' }}</button>
                                        </form>
                                        <form action="{{ route('blog.destroy', $data->id) }}" method="POST"
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
                @empty
                    <tr>
                        <td colspan="5" class="text-uppercase h3 text-danger">No blogs uploaded
                        </td>
                    </tr>
                @endforelse
            </div>
        </div>
    </section>

@endsection
