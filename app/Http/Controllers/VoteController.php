<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoteRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Map;
use App\Vote;
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

    public function store(VoteRequest $request)
    {
        $user = Auth::user();
        $now  = Carbon::now();
        $r = $request->all();

        if ($user['last_voted'] == null) {
            $last_voted = Carbon::createFromTimestamp(0);
        } else {
            $last_voted = Carbon::createFromFormat(
                'Y-m-d H:i:s', $user['last_voted']
            );
        }

        $days_since_voted = $now->diffInDays($last_voted);

        if ($days_since_voted > 0) {
            $user['votes_remaining'] = 10;
        }

        if ($user['votes_remaining'] > 0) {
            $user['votes_remaining'] -= 1;
            $user['last_voted'] = date('Y-m-d H:i:s');
            $user->save();

            if($r['map_easier'] != "skip") {            
                Vote::create(
                    [
                        'map_easier' => $r['map_easier'],
                        'map_harder' => $r['map_harder'],
                        'user_id' => $user['id'],
                    ]
                );
            }

        }
            
        return redirect('/vote');
    }
}
    