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
    <script src="https://kit.fontawesome.com/21a1b3f17e.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="/"><img src="{{ url('/img/wiredpea.png') }}" alt="WiredPea" /></a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div
                class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/">Home</a></li>
{{--                    <li class="nav-item" role="presentation"><a class="nav-link" href="/about.html">About us</a></li>--}}
{{--                    <li class="nav-item" role="presentation"><a class="nav-link" href="/contact.html">Contact us</a></li>--}}
{{--                    <li class="nav-item" role="presentation"><a class="nav-link" href="/post.html">Blog Post</a></li>--}}
                </ul>
            </div>
        </div>
    </nav>

    @yield('header')

    @yield('content')


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><a href="https://twitter.com/wiredpea" target="_blank"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></a></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><a href="https://facebook.com/wiredpea" target="_blank"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></a></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><a href="https://instagram.com/wiredpea/" target="_blank"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></a></span></li>
                        <li class="list-inline-item"><span class="fa-stack fa-lg"><a href="https://github.com/WiredPea/" target="_blank"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-github fa-stack-1x fa-inverse"></i></a></span></li>
                    </ul>
                    <p class="text-muted copyright">Copyright&nbsp;©&nbsp;WiredPea 2020</p>
                </div>
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
