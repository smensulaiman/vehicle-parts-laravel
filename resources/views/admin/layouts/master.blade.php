<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Parts Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/imgs/theme/favicon.svg')}}" />
    <!-- Template CSS -->
    <script src="{{asset('assets/js/vendors/color-modes.js')}}"></script>
    <link href="{{asset('assets/css/main.css?v=6.0')}}" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="screen-overlay"></div>

@include('admin.layouts.sidebar')

<main class="main-wrap">
    <header class="main-header navbar">
        @include('admin.layouts.navbar')
    </header>
    <section class="content-main">
        @yield('content')
    </section>
    <!-- content-main end// -->
    <footer class="main-footer font-xs">
        <div class="row pb-30 pt-15">
            <div class="col-sm-6">
                <script>
                    document.write(new Date().getFullYear());
                </script>
                &copy; Parts Management System - Senda Japan Ltd.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end">All rights reserved</div>
            </div>
        </div>
    </footer>
</main>
<script src="{{asset('assets/js/vendors/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/select2.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/js/vendors/jquery.fullscreen.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/chart.js')}}"></script>
<!-- Main Script -->
<script src="{{asset('assets/js/main.js?v=6.0')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/custom-chart.js')}}" type="text/javascript"></script>
</body>
</html>
