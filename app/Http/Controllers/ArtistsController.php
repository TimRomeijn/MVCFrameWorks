<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;

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

    public function create()
    {
        return view('artists.creatework');
    }

}
