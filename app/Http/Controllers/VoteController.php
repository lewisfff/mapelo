<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Map;
use Auth;

class VoteController extends Controller
{

    public function index()
    {
        return view('index')->with(['user' => Auth::user()]);
    }

    public function vote()
    {
        $maps = Map::randomMaps(2);
        return view('vote')->with(
            [
                'user' => Auth::user(),
                'maps' => $maps,
            ]
        );
    }

    public function store(VoteRequest $r)
    {
        dd($r);
    }
}
    