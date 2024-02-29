<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
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
    public function store(Request $request)
    {
        
        $comicsData= $request->all();

        // TODO: valido i dati, ma lo faremo in futuro
        $comic = new Comic();
            $comic->title = $comicsData['title'];
            $comic->description = $comicsData['description'];
            $comic->thumb = $comicsData['thumb'];
            $comic->price = $comicsData['price'];
            $comic->sale_date = $comicsData['sale_date'];
            $comic->type = $comicsData['type'];
            $comic->artists= $comicsData['writers'];
            $comic->writers=$comicsData['artists']; 
            $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }


}
