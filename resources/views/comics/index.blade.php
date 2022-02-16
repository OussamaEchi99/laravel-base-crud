@extends('layouts.app')

@section('main_content')
    <h1>Comics List</h1>

    @foreach ($comics as $comic)
        <div>
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                <h2>{{ $comic->title }}</h2>

                <img src="{{ $comic->thumb }}" alt="">
            </a>

            <p>{{ $comic->description }}</p>

            <div>
                <span>Series: {{ $comic->series }}</span>
                <span>Type: {{ $comic->type }}</span>
                <span>Price: {{ $comic->price }} Euro</span>
            </div>
        </div>
    @endforeach
@endsection