<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('comment', ['only' => 'store']);

        
    }
    public function store($id)
    {
        $this->validate(request(),[
            'content' => 'required|min:10'
        ]);
        $team = Team::find($id);
        $comment = $team->comments()->create([
            'content' => request('content'),
            'user_id' => auth()->user()->id,
            'team_id' => $team->id
        ]);
   
        return back();
    }
}
