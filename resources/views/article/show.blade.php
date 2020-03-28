@extends('layouts.public')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="col-md-12">{{ $article->title }}</h1>
        </div>
        <div class="row">
            <div class="col-md-12">{{ $article->body }}</div>
        </div>
    </div>
@endsection
