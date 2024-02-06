<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        return view('index')->with('teams', Team::all());
    }

    public function create()
    {
        return view('form_team');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|unique:teams|regex:/^[\pL\s\-]+$/u',
            'kota' => 'required|unique:teams|regex:/^[\pL\s\-]+$/u'
        ]);

        Team::create($request->all());
        return redirect()->back()->with('msg', 'Berhasil menambahkan data klub!');
    }
}
