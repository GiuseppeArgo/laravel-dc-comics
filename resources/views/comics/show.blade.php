@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
        <h2 class="mt-5 mb-5">{{ $comic->title }}</h2>
        <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna alla pagina iniziale</a>
        </div>
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <h4 class="mt-5">Descrizione:</h4>
        <p>{{ $comic->description }}</p>
        <p>{{ $comic->price }}</p>
    </div>
@endsection