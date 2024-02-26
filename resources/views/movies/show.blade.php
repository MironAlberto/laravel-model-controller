@extends('layouts.app')

@section('page-title', $movie->title)

@section('main-content')
    <div class="d-flex justify-content-end pt-3 pe-3">
        <a href="{{ route('movies') }}" class="btn btn-danger">
            <- Back to the movies
        </a>
    </div>

    <h1 class="text-center mb-4">
        {{ $movie->title }}
    </h1>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 text-center">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection