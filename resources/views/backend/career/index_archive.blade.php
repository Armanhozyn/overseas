@extends('layouts.backapp')
@section('title', 'careers Archived')
@section('pageTitle', 'Archived applicant')
@section('main')
    <section id="career" class="mt-lg-5">
        <div class="container">
            <div class="card text-center">
                <div class="card-header text-uppercase bg-secondary text-warning">Archived careers with leeds</div>
                <div class="card-body">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            @foreach ($careers as $key => $data)
                                <a class="nav-link {{ $key == 0 ? 'active' : '' }}" id="v-pills-profile-tab"
                                    data-toggle="pill" href="#v-pills-{{ $key }}" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">{{ $data->topic }}</a>
                            @endforeach
                        </div>
                    </nav>
                    <div class="tab-content mt-4" id="nav-tabContent">
                        @foreach ($careers as $index => $value)
                            <div class="tab-pane fade {{ $index == 0 ? 'show active' : '' }}"
                                id="v-pills-{{ $index }}" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>message</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($value->leeds as $leed)
                                            <tr>
                                                <td>{{ ++$index }}</td>
                                                <td>{{ $leed->name }}</td>
                                                <td>{{ $leed->email }}</td>
                                                <td>{{ $leed->phone }}</td>
                                                <td>{!! $leed->message !!}</td>
                                            </tr>
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
