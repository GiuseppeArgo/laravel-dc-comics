@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5">Descrizione:</h1>
        <p>{{ $comic->description }}</p>
    </div>
@endsection