@extends('layouts.backapp')
@section('title', 'PAGES')
@section('pageTitle', 'PAGES')
@section('main')
<section id="career">
    <div class="container">
        <div class="row">
            @forelse ($pages as $data)
            <div class="col-md-4">
                <div class="card" style="">
                    <div class="no-gutters align-items-center row">
                        <div class="col-md-12 text-center">
                            <a class="btn btn-primary" href="{{ route('SPage', $data->id) }}" role="button">view page details</a>
                            <span class="badge {{ $data->status == 1 ? 'bg-success' : 'bg-danger' }}">{{ $data->status == 1 ? 'Active' : 'Paused' }}</span>
                            <div class="card-body">
                                <h5 class="h5 card-title">{{ $data->title }}</h5>
                                <img src="{{ asset('/uploads/pages/' . $data->image) }}" alt="wellup overseas" class="img-fluid">
                                {{-- <p class="card-text">
                                            {!! Str::limit($data->description, $limit = 1500, $end = '...') !!}
                                        </p> --}}
                                <p class="card-text"><small class="text-muted">{{ $data->created_at }}</small></p>
                                <a class="btn btn-primary" href="{{ route('page.edit', $data->id) }}" role="button">EDIT</a>
                                <form action="{{ route('page.status', $data->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn {{ $data->status == 1 ? 'btn-success' : 'btn-danger' }}" name="status">{{ $data->status == 1 ? 'Pause' : 'Active' }}</button>
                                </form>
                                <form action="{{ route('page.destroy', $data->id) }}" method="POST" class="d-inline-block">
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
                <td colspan="5" class="text-uppercase h3 text-danger">No pages uploaded
                </td>
            </tr>
            @endforelse
        </div>
    </div>
</section>
@endsection
