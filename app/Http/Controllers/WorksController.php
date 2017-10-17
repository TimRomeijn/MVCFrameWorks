<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;

class WorksController extends Controller
{
    //
    public function store() {
        //Create artist data using the request data and save it to the database

        Work::create(request(['workimage, worktext, stylename']));

        //And then redirect to artist addwork page

        return redirect('artists/addwork');
    }
}
