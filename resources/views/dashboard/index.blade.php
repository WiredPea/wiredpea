@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="{{ route('article.index') }}">Articles</a>
            </div>
        </div>
    </div>
@endsection