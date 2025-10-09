<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignLab" >
    <meta name="robots" content="" >
    <meta name="keywords" content="school, school admin, education, academy, admin dashboard, college, college management, education management, institute, school management, school management system, student management, teacher management, university, university management" >
    <meta name="description" content="Discover Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard" >
    <meta property="og:title" content="Akademi : School and Education Management Admin Dashboard Template" >
    <meta property="og:description" content="Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard">
    <meta property="og:image" content="https://akademi.dexignlab.com/xhtml/social-image.png" >
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title Here -->
    <title>{{ trans('panel.site_title') }}</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('theme-related/images/favicon.png') }}" >
    <link href="{{ asset('theme-related/vendor/wow-master/css/libs/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('theme-related/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('theme-related/vendor/bootstrap-select-country/css/bootstrap-select-country.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme-related/vendor/jquery-nice-select/css/nice-select.css') }}">
    <link href="{{ asset('theme-related/vendor/datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('theme-related/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!--swiper-slider-->
    <link rel="stylesheet" href="{{ asset('theme-related/vendor/swiper/css/swiper-bundle.min.css') }}">
    <!-- Style css -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('theme-related/css/style.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<style>
    .header .header-content {
        height: 5rem;
        padding-left: 1.7rem !important;
        padding-right: 0rem;
        align-items: center;
        display: flex;
        left: 16.2rem;
        position: unset;
        top: 0;
        width: calc(100% - var(--width));
        margin-left: var(--width);
        border-top: none;
        padding-right: 2rem;
    }
</style>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="loader">
        <div class="dots">
            <div class="dot mainDot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->
<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper" class="wallet-open active">

    <!--**********************************
        Nav header start
    ***********************************-->
    @include('layouts.partials.nav-header')
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    @include('layouts.partials.header')
    <!--**********************************
    Header end ti-comment-alt
***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    @include('layouts.partials.sidebar')
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            @if(session('message'))
                <div class="row mb-2">
                    <div class="col-lg-12">
                        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                    </div>
                </div>
            @endif
            @if($errors->count() > 0)
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @yield('content')
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->

</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('theme-related/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('theme-related/vendor/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('theme-related/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<!-- Apex Chart -->
<script src="{{ asset('theme-related/vendor/apexchart/apexchart.js') }}"></script>
<!-- Chart piety plugin files -->
<script src="{{ asset('theme-related/vendor/peity/jquery.peity.min.js') }}"></script>
<script src="{{ asset('theme-related/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
<!--swiper-slider-->
<script src="{{ asset('theme-related/vendor/swiper/js/swiper-bundle.min.js') }}"></script>

<!-- Datatable -->
<script src="{{ asset('theme-related/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('theme-related/js/plugins-init/datatables.init.js') }}"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('theme-related/js/dashboard/dashboard-1.js') }}"></script>
<script src="{{ asset('theme-related/vendor/wow-master/dist/wow.min.js') }}"></script>
<script src="{{ asset('theme-related/vendor/bootstrap-datetimepicker/js/moment.js') }}"></script>
<script src="{{ asset('theme-related/vendor/datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('theme-related/vendor/bootstrap-select-country/js/bootstrap-select-country.min.js') }}"></script>
<script src="{{ asset('theme-related/js/custom.min.js') }}"></script>
<script src="{{ asset('theme-related/js/dlabnav-init.js') }}"></script>
<link id="rtl-style" rel="stylesheet" href="{{ asset('theme-related/css/rtl.css') }}" disabled> <!-- RTL CSS -->
<script>
    const rtlStyle = document.getElementById("rtl-style");

    function setLanguage(dir) {
        if (dir === "rtl") {
            document.body.setAttribute("dir", "rtl");
            rtlStyle.removeAttribute("disabled");
        } else {
            document.body.setAttribute("dir", "ltr");
            rtlStyle.setAttribute("disabled", "true");
        }
        localStorage.setItem("direction", dir);
    }

    document.getElementById("en-btn").addEventListener("click", () => setLanguage("ltr"));
    document.getElementById("ar-btn").addEventListener("click", () => setLanguage("rtl"));

    // Load saved preference on page load
    window.onload = () => {
        let dir = localStorage.getItem("direction") || "ltr";
        setLanguage(dir);
    };
</script>
@yield('scripts')
</body>
</html>