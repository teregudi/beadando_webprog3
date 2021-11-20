@extends('layouts.app')

@section('content')

    <div>
        <p><a href="{{ route('new-book') }}">Új köny hozzáadása</a></p>
    </div>

    @foreach ($books as $book)
    <ul class="list-group p-2 mt-3">
        <li class="list-group-item">{{ $book->author }}</li>
        <li class="list-group-item">{{ $book->title }}</li>
        <li class="list-group-item">{{ $book->year }}</li>
        <li class="list-group-item">{{ $book->summary }}</li>
        <li class="list-group-item">Szerkesztés</li>
        <li class="list-group-item">Törlés</li>
    </ul>
    @endforeach
@endsection