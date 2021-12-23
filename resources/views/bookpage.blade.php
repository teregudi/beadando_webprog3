@extends('layouts.app')

@section('content')

    <ul class="list-group p-2 mt-3">
        <li class="list-group-item">
            {{ $book->author }}: {{ $book->title }}</li>
        <li class="list-group-item">{{ $book->title }}</li>
        <li class="list-group-item">{{ $book->year }}</li>
        <li class="list-group-item">{{ $book->summary }}</li>
        <a class="btn btn-primary" href="/library/edit/{{ $book->id }}">Szerkesztés</a>
        <a class="btn btn-danger" onclick="return confirm('Biztos benne, hogy törli ezt a könyvet?')" href="/library/delete/{{ $book->isbn }}">Törlés</a>
    </ul>
@endsection