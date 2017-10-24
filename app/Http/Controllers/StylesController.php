<?php

namespace App\Http\Controllers;

use App\Style;
use Illuminate\Http\Request;

class StylesController extends Controller
{
    public function show()
    {
        $styles = Style::all();
        return view('styles/show', compact('styles'));
    }

}
