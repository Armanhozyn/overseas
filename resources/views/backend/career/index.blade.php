@extends('layouts.backapp')
@section('title', 'careers')
@section('pageTitle', 'applicant index')
@section('main')
    <section id="career" class="mt-lg-5">
        <div class="container">
            <div class="card text-center">
                <div class="card-header text-uppercase bg-secondary text-warning">careers Schedules with leeds</div>
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            @foreach ($careers as $key => $data)
                                <button class="nav-link {{ $key == 0 ? 'active' : '' }}" id="v-pills-{{ $key }}-tab"
                                    data-bs-toggle="pill" data-bs-target="#v-pills-{{ $key }}" type="button"
                                    role="tab" aria-controls="v-pills-{{ $key }}"
                                    aria-selected="true">{{ $data->topic }}</button>
                            @endforeach
                        </div>
                    </nav>
                    <div class="tab-content mt-4" id="nav-tabContent">
                        @foreach ($careers as $index => $value)
                            <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}"
                                id="v-pills-{{ $index }}" role="tabpanel"
                                aria-labelledby="v-pills-{{ $index }}-tab">
                                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>cv</th>
                                            <th>message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($value->leeds as $leed)
                                            @if ($leed->name != null)
                                                <tr>
                                                    <td>{{ ++$index }}</td>
                                                    <td>{{ $leed->name }}</td>
                                                    <td>{{ $leed->email }}</td>
                                                    <td>{{ $leed->phone }}</td>
                                                    <td><a href="public/assets/career/{{ $leed->file }}"
                                                            target="_blank">check</a></td>
                                                    <td>{!! $leed->message !!}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('custom_script')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
