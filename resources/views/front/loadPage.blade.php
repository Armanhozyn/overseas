@extends('layouts.index')
@section('content')
    <section class="page-title" @isset($page->image)
        style="background-image: url({{ asset('uploads/pages/' . $page->image) }});"
        @endisset>
        <div class="auto-container">
            <div class="content-box clearfix">
                <div class="title centred">
                    <h6>
                        @isset($submenu_id->name)
                            {{ $submenu_id->name }}
                        @endisset
                    </h6>
                    <h1>
                        @isset($submenu_id->name)
                            {{ $submenu_id->name }}
                        @endisset
                    </h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>{{ $submenu_id->name }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- service start  -->
    <section class="about-style-six">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-12">
                    @isset($page->description)
                        {!! $page->description !!}
                    @endisset
                </div>
            </div>
        </div>
    </section>
    <!-- service end  -->
@endsection
