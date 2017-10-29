<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Work;
use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search/index');
    }

    // Method for requesting the input from the searchfield
    public function show(Request $request)
    {
        $search = $request->input('searchfield');

        $workSearches = Work::search($search)->get();
        $userSearches = User::search($search)->get()->where('role', '>=', 2);


        return view('search/index', compact('workSearches', 'userSearches'));

    }
}
