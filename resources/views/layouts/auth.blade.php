<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <!-- All Meta -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords"
          content="mybaby, school, education, kindergarten, preschool, daycare, child care, children, kids, parents, teachers, students, classes, curriculum, learning, education, education management, school management, kindergarten management, preschool management, daycare management, child care management, children management, kids management, parents management, teachers management, students management, classes management, curriculum management, learning management">
    <meta property="og:


description"
          content="Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard">
    <meta property="og:image" content="https://akademi.dexignlab.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ trans('panel.site_title') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('theme-related/images/favicon.png') }}">
    <link href="{{ asset('theme-related/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
    <link href="{{ asset('theme-related/css/style.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body class="body h-100">
    <div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="login-aside text-center d-flex flex-column flex-row-auto">
            <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                <div class="text-center mb-lg-4 mb-2 pt-5 logo">
                    <img src="{{ asset('theme-related/images/logo-white.png') }}" alt="">
                </div>
                <h3 class="mb-2 text-white">Welcome back!</h3>
                <p class="mb-4">User Experience & Interface Design <br>Strategy SaaS Solutions</p>
            </div>
            <div class="aside-image position-relative" style="background-image:url({{ asset('theme-related/images/background/pic-2.png') }});">
                <img class="img1 move-1" src="{{ asset('theme-related/images/background/pic3.png') }}" alt="">
                <img class="img2 move-2" src="{{ asset('theme-related/images/background/pic4.png') }}" alt="">
                <img class="img3 move-3" src="{{ asset('theme-related/images/background/pic5.png') }}" alt="">
            </div>
        </div>
        <div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
            @yield("content")
        </div>
    </div>

    @yield('scripts')

    <script src="{{ asset('theme-related/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('theme-related/js/custom.min.js') }}"></script>
    <script src="{{ asset('theme-related/js/dlabnav-init.js') }}"></script>
</body>

</html>
