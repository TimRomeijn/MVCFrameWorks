<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use Illuminate\Support\Facades\Auth;

class WorksController extends Controller
{
    //Method where the works are stored in the database
    public function store(request $request) {

        //Form-validation for these fields
        $this->validate(request(),[
            'workimage' => 'required',
            'worktext' => 'required'
        ]);

        $work = new Work();

        $work->user_id = auth()->user()->id;
        $work->workimage = $request->workimage;
        $work->worktext = $request->worktext;
        $work->style_id = $request->stylename;
        $work->save([$work]);


        //And then redirect to artist addwork page

        return redirect('artists/addwork');
    }

    // Detail page for the specific work
    public function show(Work $work)
    {

        return view('works/show', compact('work'));
    }
}
