@extends('layouts.index')
@section('content')
<section class="page-title" style="background-image: url({{ asset('uploads/pages/'.$page->image) }});">
    <div class="auto-container">
        <div class="content-box clearfix">
            <div class="title centred">
                <h6>{{ $submenu_id->name }}</h6>
                <h1>{{ $page->title }}</h1>
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
                {!! $page->description !!}
            </div>
        </div>
    </div>
</section>
<!-- service end  -->
@endsection
