@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="col-md-12">Create header</h1>
        </div>
        <form action="{{ route('headers.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @honeypot
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp">
                <small id="titleHelp" class="form-text text-muted">The title of the post.</small>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input btn btn-file" id="headerImage" name="headerImage">
                <label class="custom-file-label" for="headerImage">Choose file</label>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>
@endsection
