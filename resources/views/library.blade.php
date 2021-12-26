@extends('layouts.app')

@section('content')

    @auth
        <ul class="list-group p-2 mt-3">
            <li class="list-group-item mx-auto">
                <a href="{{ route('new-book') }}">&#10133; Új köny hozzáadása</a>
            </li>
        </ul>
    @endauth
    @foreach ($books as $book)
    <ul class="list-group p-2 mt-3">
        <li class="list-group-item">
            <a href="/library/{{ $book->id }}">{{ $book->author }}: {{ $book->title }}</a>
            @auth
                <a class="btn btn-primary" href="/library/edit/{{ $book->id }}">Szerkesztés</a>
                <a class="btn btn-danger float-right" onclick="return confirm('Biztos benne, hogy törli ezt a könyvet?')" 
                    href="/library/delete/{{ $book->isbn }}">Törlés</a>
            @endauth
        </li>
    </ul>
    @endforeach

@endsection