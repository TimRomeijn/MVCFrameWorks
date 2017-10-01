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

    public function show($id)
    {
        $artist = Artist::find($id);

        return view('artists/show', compact('artist'));
    }

}
