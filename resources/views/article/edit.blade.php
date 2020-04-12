@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="col-md-12">Show</h1>
        </div>
        <form action="{{ route('article.update', ['article' => $article->id]) }}" method="post">
            @csrf
            @honeypot
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp" value="{{ $article->title }}">
                <small id="titleHelp" class="form-text text-muted">The title of the post.</small>
            </div>
            <div class="form-group">
                <label for="subTitle">Subtitle</label>
                <input type="text" class="form-control" id="subTitle" name="subTitle" aria-describedby="subTitleHelp" value="{{ $article->subtitle }}">
                <small id="subTitleHelp" class="form-text text-muted">The subtitle of the post.</small>
            </div>
            <div class="form-group">
                <label for="headerId">File id</label>
                <input type="number" class="form-control" id="headerId" name="headerId" value="{{ $article->header_id }}">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" aria-describedby="bodyHelp">{{ $article->body }}</textarea>
                <small id="bodyHelp" class="form-text text-muted">The content of the article goes here</small>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="published" name="published" @if($article->published == 1) checked="checked"@endif>
                <label class="form-check-label" for="published">
                    Published
                </label>
            </div>
            <div class="form-group">
                <label for="publishedDate">Published date</label>
                <input type="text" class="form-control" id="publishedDate" name="publishedDate" aria-describedby="publishedDateHelp" value="{{ $article->publishedDate }}">
                <small id="publishedDateHelp" class="form-text text-muted">The date on which you want this post to be published.</small>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>
@endsection
