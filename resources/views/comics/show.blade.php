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

        <div><a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modify</a></div>

        <div>
            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="post">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
@endsection