<?php

namespace App\Http\Controllers;

use App\Http\Requests\PertandinganRequest;
use App\Models\Team;
use App\Models\Pertandingan;

class PertandinganController extends Controller
{
    public function create()
    {
        $teams = Team::all();
        return view('form_pertandingan')->with('teams', $teams);
    }

    public function store(PertandinganRequest $request)
    {
        if ($request->home_id === $request->away_id) {
            return redirect()->back()->with(['team' => 'Team Home dan Team Away tidak boleh sama']);
        }
        Pertandingan::create($request->validated());

        $homeTeam = Team::find($request->home_id);
        $awayTeam = Team::find($request->away_id);

        $homeTeam->increment('goal_menang', $request->home_score);
        $homeTeam->increment('goal_kalah', $request->away_score);

        $awayTeam->increment('goal_menang', $request->away_score);
        $awayTeam->increment('goal_kalah', $request->home_score);

        if ($request->home_score === $request->away_score) {
            $homeTeam->increment('seri');
            $awayTeam->increment('seri');
        } else if ($request->home_score > $request->away_score) {
            $homeTeam->increment('menang');
            $awayTeam->increment('kalah');
        } else if ($request->home_score < $request->away_score) {
            $homeTeam->increment('kalah');
            $awayTeam->increment('menang');
        }
        $homeTeam->save();
        $awayTeam->save();
        return redirect('/');
    }
}
