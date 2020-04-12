@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="col-md-12">Create article</h1>
        </div>
        <form action="{{ route('article.store') }}" method="post">
            @csrf
            @honeypot
            <div class="form-group">
                <label for="headerId">File id</label>
                <input type="number" class="form-control" id="headerId" name="headerId">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp">
                <small id="titleHelp" class="form-text text-muted">The title of the post.</small>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" aria-describedby="bodyHelp"></textarea>
                <small id="bodyHelp" class="form-text text-muted">The content of the article goes here</small>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="published" name="published">
                <label class="form-check-label" for="published">
                    Published
                </label>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>
@endsection
