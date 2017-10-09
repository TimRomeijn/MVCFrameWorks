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

    public function addwork(Artist $artist) //artist adds work to profile
    {
        return view('artists/addwork', compact('artist'));
    }

    public function store()
    {

        //Create artist data using the request data and save it to the database

        Artist::create(request(['artistimage, artisttext']));

        //And then redirect to artist addwork page

        return redirect('artists/addwork');
    }

}
