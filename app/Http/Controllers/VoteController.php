<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class VoteController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        if ($user) {
            return view('vote')->with(['user' => $user]);
        } else {
            return view('index');
        }
    }

    public function store(VoteRequest $r)
    {
        dd($r);
    }
}
    