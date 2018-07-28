<?php

namespace App\Http\Controllers;

use App\News;
use App\User;
use App\Team;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('user')->latest()->paginate(10);

        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $new = News::find($id);

        return view('news.show', compact('new'));
    }

    public function showNewsForTeam($name)
    {
        $team = Team::where('name', $name)->first();

        $news = $team->news()->latest()->paginate(10);

        return view('news.index', compact('news'));
    }

    public function create()
    {
        $teams = Team::all();

        return view('news.create', compact('teams'));
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required',
            'content' => 'required|min:10',
            'teams' => 'required|array'
        ]);

        $news = News::create([
            'title' => request('title'),
            'content' => request('content'),
            'user_id' => auth()->user()->id
        ]);

        $request->session()->flash('message', 'Thank you for publishing article on www.nba.com!');
        
        $news->teams()->attach(request('teams'));

        return redirect('/news');
    }
}
