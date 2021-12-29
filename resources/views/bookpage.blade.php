@extends('layouts.app')

@section('content')

    <ul class="list-group p-2 mt-3">
        <li class="list-group-item">
            @if ($book->cover == null)
                <img src="{{ URL::to('/') }}/uploads/books/no_cover.jpg" alt="cover">
            @else
                <img src="{{ URL::to('/') }}/uploads{{ $book->cover }}" alt="cover">
            @endif
        </li>
        <li class="list-group-item">Szerző: {{ $book->author }}</li>
        <li class="list-group-item">Cím: {{ $book->title }}</li>
        <li class="list-group-item">Kiadás éve: {{ $book->year }}</li>
        <li class="list-group-item">{{ $book->summary }}</li>
        @auth
            <a class="btn btn-primary" href="/library/edit/{{ $book->id }}">Szerkesztés</a>
            <a class="btn btn-danger" onclick="return confirm('Biztos benne, hogy törli ezt a könyvet?')" 
                href="/library/delete/{{ $book->isbn }}">Törlés</a>
        @endauth
    </ul>
@endsection