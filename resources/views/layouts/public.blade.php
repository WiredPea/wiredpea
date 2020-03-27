<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'WiredPea') }}</title>
    <link rel="icon" type="image/png" href="/favicon.png" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="/js/all.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="/css/all.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <div class="col-md-3">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ url('/img/wiredpea.png') }}" alt="WiredPea" />
                </a>
            </div>
            <div class="col-md-7 text-md-center">
{{--                <a href="#">Products</a>--}}
{{--                <a href="#">About</a>--}}
            </div>
            <div class="col-md-2 text-right">
                <a href="https://twitter.com/wiredpea" target="_blank"><i class="fab fa-twitter-square"></i></a>
                <a href="https://facebook.com/wiredpea" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="https://instagram.com/wiredpea/" target="_blank"><i class="fab fa-instagram-square"></i></a>
            </div>
        </div>
    </nav>
    <div id="app">
        <main class="container">
            @yield('content')
        </main>
    </div>
    <footer class="container">
        <div class="row">
            <div class="col-md-2">
{{--                Copyright &copy; 2020--}}
            </div>
        </div>
    </footer>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-3550192-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-3550192-1');
    </script>
</body>
</html>
