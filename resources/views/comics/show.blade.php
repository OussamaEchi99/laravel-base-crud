@extends('layouts.app')

@section('main_content')
    <div>
        <h1>{{ $comic->title }}</h1>

       <img src="{{ $comic->thumb }}" alt="">

        <p>{{ $comic->description }}</p>

        <div>
            <span>Series: {{ $comic->series }}</span>
            <span>Type: {{ $comic->type }}</span>
            <span>Price: {{ $comic->price }} Euro</span>
        </div>
    </div>
@endsection