@extends('layouts.app')

@section('content')
    <h1>Home page</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam excepturi nam quis sit delectus voluptatibus dolores explicabo molestias odit labore velit, laboriosam tenetur facere magnam placeat, voluptates quam at nobis?</p>
@endsection

@section('sidebar')
    @parent
    <p>Appended from home</p>
@endsection