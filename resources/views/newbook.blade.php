@extends('layouts.app')

@section('content')
    <h1>Új könyv hozzáadása</h1>

    <form method="POST" action="{{ route('new-book-submit') }}">
        @csrf
        <div class="form-group">
            <label for="isbn">ISBN szám</label>
            <input type="text" class="form-control" id="isbn" name="isbn">
        </div>
        <div class="form-group">
            <label for="author">Szerző</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="form-group">
            <label for="title">Cím</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="year">Kiadás éve</label>
            <input type="text" class="form-control" id="year" name="year">
        </div>
        <div class="form-group">
            <label for="publisher">Kiadó</label>
            <input type="text" class="form-control" id="publisher" name="publisher">
        </div>
        <div class="form-group">
            <label for="summary">Borítószöveg</label>
            <textarea class="form-control" id="summary" name="summary" rows="3"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Hozzáad</button>
    </form>
@endsection