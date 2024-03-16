@extends('layout.app')

@section('page-title', 'COMICS')

@section('main-content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2">
                    <div class="thumb">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                    </div>
                    {{ $comic['series'] }}
                </div>
            @endforeach
        </div>
    </div>
@endsection
