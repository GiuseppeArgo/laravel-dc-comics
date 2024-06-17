@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mt-5 mb-5">{{ $comic->title }}</h2>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <h4 class="mt-5">Descrizione:</h4>
        <p>{{ $comic->description }}</p>
        <p>{{ $comic->price }}</p>
    </div>
@endsection