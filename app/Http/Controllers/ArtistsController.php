<?php

namespace App\Http\Controllers;

use App\Style;
use Illuminate\Http\Request;
use App\Artist;
use App\Work;

class ArtistsController extends Controller
{
    //

    public function index()
    {
        $artists = Artist::all();

        return view('artists/index', compact('artists'));
    }

    public function show(Artist $artist) //artist find wildcard
    {
        return view('artists/show', compact('artist'));
    }

    public function addwork(Artist $artist) //artist adds work to profile
    {
        $styles = Style::all();

        $works = Work::all();

        return view('artists/addwork', compact('artist', 'styles', 'works'));
    }



}
