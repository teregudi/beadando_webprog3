@extends('layouts.app')

@section('content')
    <h1>Adatok szerkesztése</h1>

    <form method="POST" action="/library/edit/{{ $book->id }}">
        @csrf
        <div class="form-group">
            <label for="isbn">ISBN szám</label>
            <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $book->isbn }}">
        </div>
        <div class="form-group">
            <label for="author">Szerző</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}">
        </div>
        <div class="form-group">
            <label for="title">Cím</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
        </div>
        <div class="form-group">
            <label for="year">Kiadás éve</label>
            <input type="text" class="form-control" id="year" name="year" value="{{ $book->year }}">
        </div>
        <div class="form-group">
            <label for="publisher">Kiadó</label>
            <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher }}">
        </div>
        <div class="form-group">
            <label for="summary">Borítószöveg</label>
            <textarea class="form-control" id="summary" name="summary" rows="3">{{ $book->summary }}</textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Jóváhagy</button>
    </form>
@endsection