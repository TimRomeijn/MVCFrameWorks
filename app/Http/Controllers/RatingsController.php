<?php

namespace App\Http\Controllers;

use App\Work;
use App\Rating;
use Illuminate\Http\Request;

class RatingsController extends Controller
{
    public function store(Work $work)
    {

        $work->addRating(request('rating'));


        return back();
    }
}
