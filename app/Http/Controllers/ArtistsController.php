<?php

namespace App\Http\Controllers;

use App\Rating;
use App\Style;
use App\User;
use Illuminate\Http\Request;
use App\Artist;
use App\Work;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ArtistsController extends Controller
{
    //Only apply middleware restrictions on the addwork page
    public function __construct()
    {
        $this->middleware('auth',['only' =>['addwork']]);
    }

    //Show all the artists on the artists page
    public function index()
    {
        $artists = User::all()->where('role', '=', 2);

        return view('artists/index', compact('artists'));
    }

    //Show the single artist detail
    public function show($id) //artist find wildcard
    {
        $artist = User::find($id);

        $works = Work::all()->where('user_id', '=', $id);

        return view('artists/show', compact('artist', 'works'));
    }

    //The page where artists can add their works
    public function addwork(Artist $artist) //artist adds work to profile
    {
        $styles = Style::all();

        $works = Work::all()->where('user_id', '=', Auth::user()->id);

        return view('artists/addwork', compact('artist', 'styles', 'works'));
    }



}
