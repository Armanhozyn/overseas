<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    @include('include.back.css')
    @yield('extraCss')
</head>

<body data-sidebar="dark" data-layout-mode="light">
    @if ($errors->any())
    <div id="error-box" style="position: fixed; top: 100px; right: 25px; z-index:1000; width: 20%;">
        <div class="alert alert-danger" role="alert" style=" margin: 0 auto;">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </div>
    </div>
    @elseif (Session::has('success'))
    <div id="error-box" style="position: fixed; top: 100px; right: 25px; z-index:1000; width: 20%;">
        <div class="alert alert-success" role="alert" style=" margin: 0 auto;">
            {{ session('success') }}
        </div>
    </div>
    @endif
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    <!-- Begin page -->
    <div id="layout-wrapper">
        @include('include.back.header')
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                @include('include.back.sidebar')
            </div>
        </div>
        <!-- Left Sidebar End -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">@yield('pageTitle')</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                        <li class="breadcrumb-item active">@yield('pageTitle')</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    @yield('main')

                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © IdeaCast IT.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Asifuddoula Sakib
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->
    @include('include.back.scripts')
    @yield('extraScripts')
</body>

</html>
