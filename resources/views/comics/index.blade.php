@extends('layouts.app')

@section('content')

    <div class="container pt-5">
        <div class="d-flex justify-content-between align-items-center mb-5">
        <h1 class="mb-5">Lista Fumetti</h1>
        <a href="{{ route('comics.create') }}" class="btn btn-secondary">Crea nuovo Fumetto</a>
        </div>
        <div class="row g-5 d-flex justify-content-center align-items-center">
            @foreach ($comicsList as $curComic)
                <div class="col">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="{{$curComic->thumb}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title">{{ $curComic->title }}</h4>
                            <p>{{ $curComic->series }}</p>
                            <p>{{ $curComic->type }}</dp>
                            <p>{{ $curComic->price }}</p>
                            <p>{{ $curComic->sale_date }}</p>
                            <a href="{{ route('comics.show', ['comic' => $curComic->id]) }}" class="btn btn-primary mb-2">Leggi i dettagli</a>
                            <a href="{{route('comics.edit', ['comic' => $curComic->id])}}" class="btn btn-secondary mb-2">Modifica i Dettagli</a>
                            <form action="{{ route('comics.destroy', $curComic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Cancella</button>
                            </form>
                        </div>
                    </div>
                </div>
        @endforeach
        </div>
    </div>  

@endsection