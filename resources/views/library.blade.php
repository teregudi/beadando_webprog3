@extends('layouts.app')

@section('content')

    <ul class="list-group p-2 mt-3">
        <li class="list-group-item">
            <a href="{{ route('new-book') }}">&#10133; Új köny hozzáadása</a>
        </li>
    </ul>
    @foreach ($books as $book)
    <ul class="list-group p-2 mt-3">
        <li class="list-group-item">
            <a href="/library/{{ $book->id }}">{{ $book->author }}: {{ $book->title }}</a>
            <a class="btn btn-primary" href="/library/edit/{{ $book->id }}">Szerkesztés</a>
        <a class="btn btn-danger" onclick="return confirm('Biztos benne, hogy törli ezt a könyvet?')" href="/library/delete/{{ $book->isbn }}">Törlés</a>
        </li>
    </ul>
    @endforeach

@endsection