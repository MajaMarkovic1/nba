<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommentReceived;

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

        Mail::to($team->email)->send(new CommentReceived($team));
   
        return back();
    }
}
