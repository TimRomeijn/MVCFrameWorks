<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistsController extends Controller
{
    //

    public function artists()
    {

        $name = 'tim';
        return view('artists')->with([
            'first' => 'tim',
            'last' => 'romeijn'
        ]);
    }

}
