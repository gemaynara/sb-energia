<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    @include('layouts.partials.header')

    <?php
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    ?>
</head>

<body>
<!-- Preloader -->
<div class="preloader-it">
    <div class="la-anim-1"></div>
</div>
<!-- /Preloader -->
<div class="wrapper theme-2-active navbar-top-light horizontal-nav">
    <!-- Top Menu Items -->
@include('layouts.partials.navbar')
<!-- /Top Menu Items -->

    <!-- Left Sidebar Menu -->
@include('layouts.partials.menu')
<!-- /Left Sidebar Menu -->

    <!-- Right Sidebar Menu -->
{{--@include('layouts.partials.right-sidebar')--}}
<!-- /Right Sidebar Menu -->


    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container pt-30">
        @include('layouts.alerts')
        <!-- Row -->
        @yield('content')
        <!-- /Row -->

        </div>

        <!-- Footer -->
        @include('layouts.partials.footer')
        .<!-- /Footer -->

    </div>
    <!-- /Main Content -->

</div>
<!-- /#wrapper -->

<!-- JavaScript -->

@include('layouts.partials.scripts')
</body>

</html>
