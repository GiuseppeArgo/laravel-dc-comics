<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsList = Comic::all();
        return view('comics.index', compact('comicsList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {
        //Controllo dati
        // $request->validate([
        //     'title' => ['required', 'min:3'],
        //     'description' => ['min:10'],
        //     'price' => ['required', 'min:1'],
        //     'series' => ['required', 'min:1'],
        //     'sale_date' => ['required'],
        // ], [ 
        //     'title.required' => 'Il titolo non può essere vuoto',
        //     'description.required' => 'La descrizione non pò essere vuota',
        //     'price.required' => 'Scegli un prezzo',
        //     'series.required' => 'Indica la serie di appartenenza',
        //     'sale_date' => 'Seleziona una data'
        // ]);


        $data = $request->all();
        $comics = new Comic();
        $comics->fill($data);
        $comics->save();
        return redirect()->route("comics.show", ["comic" => $comics->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.modify', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $data = $request->all();
        $comic->update($data);
        return redirect()->route('comics.show', ['comic'=> $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
