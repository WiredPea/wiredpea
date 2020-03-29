@extends('layouts.public')

@section('content')
    @foreach ($articles as $article)
        <div class="row">
            <div class="col-md-12">
                <h2>{{ $article->title }}</h2>
            </div>
            <div class="col-md-12">
                @markdown(\Illuminate\Support\Str::limit($article->body, 250, $end='...'))
            </div>
            <div class="col-md-12">
                <a href="/article/{{ $article->slug }}">Read more</a>
            </div>
        </div>
    @endforeach
@endsection
