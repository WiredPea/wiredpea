@extends('layouts.app')

@section('content')
    <div class="photo-gallery">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Headers images</h2>
                <p class="text-right"><a href="{{ route('headers.create') }}">Add new</a></p>
            </div>
            <div class="row photos">
                @foreach ($headers as $header)
                    <div class="col-sm-6 col-md-4 col-lg-3 item text-center">
                        <a data-lightbox="photos" href="{{ asset('images/headers/' . $header->id . '.jpg') }}">
                            <img class="img-fluid" src="{{ asset('images/headers/' . $header->id . '.jpg') }}" />
                        </a>
                        {{ $header->title }} ({{ $header->id }})
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
