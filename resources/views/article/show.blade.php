@extends('layouts.public')
@section('header')
    <header class="masthead" style="background-image:url({{ asset('images/headers/' . $article->header_id . '.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="post-heading">
                        <h1>{{ $article->title }}</h1>
                        @if ($article->subtitle )
                            <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                        @endif
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <article>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    @markdown($article->body)
                </div>
            </div>
        </div>
    </article>
@endsection
