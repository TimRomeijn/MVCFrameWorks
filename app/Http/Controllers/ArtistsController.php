<?php

namespace App\Http\Controllers;

use App\Style;
use Illuminate\Http\Request;
use App\Artist;
use App\Work;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArtistsController extends Controller
{
    //

    public function index()
    {
        $artists = Auth::user()->all()->where('role', '=', 2);

        return view('artists/index', compact('artists'));
    }

    public function show(Artist $artist) //artist find wildcard
    {
        return view('artists/show', compact('artist'));
    }

    public function addwork(Artist $artist) //artist adds work to profile
    {
        $styles = Style::all();

        $works = Work::all()->where('user_id', '=', Auth::user()->id);

        return view('artists/addwork', compact('artist', 'styles', 'works'));
    }



}
