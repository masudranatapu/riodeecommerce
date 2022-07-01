<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
        <!-- for header link -->
        @include('layouts.backend.partial.head')
        <link rel="stylesheet" href="{{asset('massage/toastr/toastr.css')}}">
        <!-- for css input -->
        @stack('css')
    </head>
    <body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">
        <!-- BEGIN: Header-->
        <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
            @include('layouts.backend.partial.header')
        </nav>
        <!-- BEGIN: Main Menu-->
        <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
            @include('layouts.backend.partial.sidebar')
        </div>
        <!-- END: Main Menu-->
        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                <div class="content-header row"></div>
                @yield('content')
            </div>
        </div>
        <!-- END: Content-->
        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>
        <!-- BEGIN: Footer-->
        <footer class="footer footer-static footer-light">
            @include('layouts.backend.partial.footer')
        </footer>
        <!-- END: Footer-->
        @include('layouts.backend.partial.foot')
        <script src="{{asset('massage/toastr/toastr.js')}}"></script>
        {!! Toastr::message() !!}
        <script>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    toastr.error('{{ $error }}','Error',{
                        closeButton:true,
                        progressBar:true,
                    });
                @endforeach
            @endif
        </script>
        @stack('js')
    </body>
</html>