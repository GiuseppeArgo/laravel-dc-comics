@extends('layouts.app')

@section('content')

    <div class="container pt-5">
        <h1 class="mb-5">Lista Fumetti</h1>
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
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('comics.show', ['comic' => $curComic->id]) }}" class="btn btn-primary">Leggi la descrizione</a>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach
        </div>
    </div>  

@endsection