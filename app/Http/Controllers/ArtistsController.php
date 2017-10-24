<?php

namespace App\Http\Controllers;

use App\Style;
use App\User;
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
        $artists = User::all()->where('role', '=', 2);

        return view('artists/index', compact('artists'));
    }

    public function show($id) //artist find wildcard
    {
        $artist = User::find($id);

        $works = Work::all()->where('user_id', '=', $id);

        return view('artists/show', compact('artist', 'works'));
    }

    public function addwork(Artist $artist) //artist adds work to profile
    {
        $styles = Style::all();

        $works = Work::all()->where('user_id', '=', Auth::user()->id);

        return view('artists/addwork', compact('artist', 'styles', 'works'));
    }



}
