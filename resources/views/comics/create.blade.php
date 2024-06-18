@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1>Crea nuovo fumetto</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo:</label>
                <input type="text" class="form-control" id="title" placeholder="Action Comics #1000: The Deluxe Edition"
                    name="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione:</label>
                <textarea class="form-control" id="description" rows="4" name="description" required></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb:</label>
                <input type="text" class="form-control" id="thumb"
                    placeholder="https://www.altavod.com/assets/images/poster-placeholder.png" name="thumb" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Prezzo in $:</span>
                <input type="text" class="form-control" aria-label="price" name="price" placeholder="19.99" required>
            </div>
            <div class="mb-3">
                <label for="series">Serie:</label>
                <input type="text" class="form-control" id="series" name="series" required>
            </div>
            <div class="mb-3">
                <label for="sale-date" class="form-label">Data di vendita:</label>
                <input type="date" class="form-control" id="sale-date" name="sale_date" required>
            </div>
            <div class="mb-3">
                <label for="type"></label>
                <select id="type" class="form-select" aria-label="Default select example" name="type" required>
                    <option value="comic book">Fumetto</option>
                    <option value="graphic novel">Graphic novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Crea fumetto</button>
        </form>
    </div>
@endsection
