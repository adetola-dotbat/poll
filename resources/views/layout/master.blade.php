<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>@yield('pageName') | {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite0226.css?ver=3.1.2') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme0226.css?ver=3.1.2') }}">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-91615293-4');
    </script>
</head>

<body class="{!! $bodyClass ?? '' !!}">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                @include('inc.sidebar')
            </div>
            <div class="nk-wrap ">
                <div class="nk-header nk-header-fixed is-light">
                    @include('inc.header')
                </div>
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            @yield('content')
                        </div>
                    </div>
                </div>
                @include('inc.footer')
            </div>
        </div>
    </div>
    @stack('modal')
    @stack('script')
</body>
<!-- Mirrored from dashlite.net/demo2/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2023 13:00:31 GMT -->

</html>
