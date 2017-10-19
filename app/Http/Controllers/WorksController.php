<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;

class WorksController extends Controller
{
    //
    public function store(request $request) {
        //Create artist data using the request data and save it to the database

        Work::create(['workimage'=> $request->input('workimage'),
            'worktext'=> $request->input('worktext'),
            'style_id'=> $request->input('stylename')]);

        //And then redirect to artist addwork page

        return redirect('artists/addwork');
    }

    public function show(Work $work)
    {
        return view('works/show', compact('work'));
    }
}
