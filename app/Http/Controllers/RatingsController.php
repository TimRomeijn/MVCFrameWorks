<?php

namespace App\Http\Controllers;

use App\Work;
use App\Rating;
use Illuminate\Http\Request;

class RatingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, Work $work)
    {
        $rating = new Rating();
        $rating->user_id = auth()->user()->id;
        $rating->rating = $request->rating;
        $work->ratings()->save($rating);

        return back();
    }
}
