<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use App\Rating;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    //Home page where all the latest works will be shown
    public function index()
    {
        $works = DB::table('works')->latest()->get();

        return view('welcome', compact('works'));
    }
}
