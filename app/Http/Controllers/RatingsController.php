<?php

namespace App\Http\Controllers;

use App\Work;
use App\Rating;
use Illuminate\Http\Request;

class RatingsController extends Controller
{
    //Only when logged in rating is possible
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Save the ratings to the database
    public function store(Request $request, Work $work)
    {
        //Only allow rating when users are logged in more then once
        if(auth()->user()->logincount >1){
            $rating = new Rating();
            $rating->user_id = auth()->user()->id;
            $rating->rating = $request->rating;
            $work->ratings()->save($rating);
        }else{
            return redirect('/');
        }


        return back();
    }
}
