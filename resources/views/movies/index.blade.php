@php
    $movieImages = [
        'padrino.jpg',
        'via-col-vento.jpg',
        'psycho.jpeg',
        'gravity.jpeg',
        'toy-story.jpg',
        'pulp-fiction.jpg',
        'forrest-gump.webp',
        'guerre-stellari.webp',
        'et.jpg',
        'il-silenzio-degli-innocenti.jpg'
    ]
@endphp

@extends('layouts.app')

@section('page-title', 'Movies')

@section('main-content')
    <h1 class="text-center">
        Movies
    </h1>

    <div class="container">
        <div class="row">
            @foreach ($movies as $index => $movie)
                <div class="col-4">
                    <div class="card mb-4 text-center">
                        <img src="{{ Vite::asset('resources/img/' . $movieImages[$index % count($movieImages)]) }}" class="img" alt="{{ $movie->title }}">
                        <div class="card-body">
                            <h4 class="card-title fw-bolder">
                                {{ $movie->title }}
                            </h4>
                            <p class="card-text fw-bolder text-secondary">
                                Original Title: <strong>{{ $movie->original_title }}</strong>
                            </p>
                            <p class="card-text">
                                Nationality: <strong>{{ $movie->nationality }}</strong>
                            </p>
                            <p class="card-text">
                                Date: <strong>{{ $movie->date }}</strong>
                            </p>
                            <p class="card-text">
                                Vote: <strong>{{ $movie->vote }}</strong>
                            </p>
                            <a href="{{ route('show', ['id' => $movie->id]) }}" class="btn btn-danger">
                                More Details
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
