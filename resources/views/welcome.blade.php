@extends('layouts.public')

@section('header')
    <header class="masthead" style="background-image:url('/img/background-2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h1>WiredPea</h1><span class="subheading">A journey through code</span></div>
                </div>
            </div>
        </div>
    </header>
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8">
                @foreach ($articles as $article)
                <div class="post-preview">
                    <a href="/article/{{ $article->slug }}">
                        <h2 class="post-title">{{ $article->title }}</h2>
                    </a>
                    <p>@markdown(\Illuminate\Support\Str::limit($article->body, 250, $end='...'))</p>
                    <p class="post-meta">Posted by {{ $article->author->name }}</p>
                </div>
                <hr>
                @endforeach

{{--                <div class="clearfix"><button class="btn btn-primary float-right" type="button">Older Posts&nbsp;⇒</button></div>--}}
            </div>
        </div>
    </div>
@endsection
