<?php

namespace App\Http\Controllers;

use App\Style;
use App\Work;
use Illuminate\Http\Request;

class StylesController extends Controller
{
    public function show($id)
    {
        $styles = Style::all();
        $style = $styles->find($id);

        $works = Work::all()->where('style_id', '=', $id);

        return view('styles/show', compact('styles','style', 'works'));
    }

}
