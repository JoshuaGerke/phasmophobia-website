<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GhostsController extends Controller
{
    public function index(Request $request)
    {

        return view('pages.ghosts');
    }
}
