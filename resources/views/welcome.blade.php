@extends('layouts.public')

@section('content')
    @foreach ($articles as $article)
        <div class="row">
            <div class="col-md-8">
                <h2>{{ $article->title }}</h2>
            </div>
            <div class="col-md-4 text-md-right">
                {{ $article->publishedDate }}
            </div>
            <div class="col-md-12">
                {{ \Illuminate\Support\Str::limit($article->body, 150, $end='...') }}
            </div>
            <div class="col-md-12">
                <a href="#">Read more</a>
            </div>
        </div>
    @endforeach
@endsection
