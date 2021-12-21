<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestsController extends Controller
{
    public function index(Request $request)
    {

        return view('pages.quests');
    }
}
