@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="col-md-11">Articles</h1>
            <div class="col-md-1">
                <a href="{{ route('article.create') }}"><i class="fad fa-plus-square"></i></a>
            </div>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Published</th>
                <th scope="col">Published date</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th scope="row">
                        <a href="{{ route('article.edit', ['article' => $article->id]) }}">
                            {{ $article->title }}
                        </a>
                    </th>
                    <td>{{ $article->author->name }}</td>
                    <td>@if ($article->published == 0) False @else True @endif</td>
                    <td>{{ $article->publishedDate }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
