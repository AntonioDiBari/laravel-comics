@extends('layout.app')

@section('page-title', 'COMICS')

@section('main-content')
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-2">
                <div class="thumb">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>
                {{ $comic['title'] }}
            </div>
        @endforeach
    </div>
@endsection
