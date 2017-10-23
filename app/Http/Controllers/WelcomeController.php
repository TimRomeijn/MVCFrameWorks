<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;

class WelcomeController extends Controller
{
    public function index()
    {
        $works = Work::all();

        return view('welcome', compact('works'));
    }
}
