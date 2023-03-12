<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('head')
</head>

@php
    /**
     * available sidebar_options: [
     *  'sidebar-collapse',
     *  'sidebar-collapse sidebar-mini',
     *  'sidebar-mini', // default
     * ]
     * */
    $sidebar_option = isset($sidebar_option) ? $sidebar_option : 'sidebar-mini sidebar-collapse';
@endphp
<body class="hold-transition skin-blue {{ $sidebar_option }}">
    <div class="global-params" data-app-url="{{ url('/') }}"></div>

    <div class="wrapper" id="app">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            @include('layouts.top-bar')
        </nav>

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar sidebar-dark-primary  elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="brand-link">
                <div class="brand-image mt-1">
                    <i class="fab fa-laravel"></i>
                </div>
                <span class="brand-text font-weight-light ml-2">{{ config('app.name') }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <nav class="mt-2">
                    @include('layouts.menu')
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @include('layouts.header')

            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                Version: 1.0.0
            </div>
            <strong>Copyright &copy; {{ date("Y") }}</strong> All rights reserved.
        </footer>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts-include')
    <script>
        (function() {
            @stack('scripts')
        }) ()
    </script>
</body>

</html>
