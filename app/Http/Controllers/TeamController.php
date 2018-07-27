<?php

namespace App\Http\Controllers;

use App\News;
use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    public function index()
    {
        $teams = Team::all();
        return view('teams.index', compact('teams'));

    }

    public function show($id)
    {
        $team = Team::find($id);
        return view('teams.show', compact('team'));

    }

}
