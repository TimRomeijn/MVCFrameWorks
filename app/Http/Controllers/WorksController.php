<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;

class WorksController extends Controller
{
    //
    public function store(request $request) {
        //Create artist data using the request data and save it to the database

        $work = new Work();

        $work->user_id = auth()->user()->id;
        $work->workimage = $request->workimage;
        $work->worktext = $request->worktext;
        $work->style_id = $request->stylename;
        $work->save([$work]);


        //And then redirect to artist addwork page

        return redirect('artists/addwork');
    }

    public function show(Work $work)
    {
        return view('works/show', compact('work'));
    }
}
