<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ ('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ ('assets/img/favicon.png') }}">
    <title>{{ config('app.name', 'Quizz') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ ('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ ('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ ('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link id="pagestyle" href="{{ ('assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
    @stack('css')
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <!-- Side bar -->
    @include('admin.partials.sidebar')
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        @include('admin.partials.header')
        <main>
            @yield('content')
        </main>
    </main>
    @include('admin.partials.plugins')
    <!--   Core JS Files   -->
    <script src="{{ ('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ ('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ ('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ ('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ ('assets/js/plugins/chartjs.min.js') }}"></script>
    @include('admin.partials.themeScript')
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ ('assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
    @stack('js')
</body>

</html>
