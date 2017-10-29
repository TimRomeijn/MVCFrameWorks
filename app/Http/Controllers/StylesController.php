<?php

namespace App\Http\Controllers;

use App\Style;
use App\Work;
use Illuminate\Http\Request;

class StylesController extends Controller
{
    // The page where the works that belong to a certain style will be shown
    public function show($id)
    {
        $styles = Style::all();
        $style = $styles->find($id);

        $works = Work::all()->where('style_id', '=', $id);

        return view('styles/show', compact('styles','style', 'works'));
    }

}
