<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnswersController extends Controller
{
    public function create()
    {
        return view('answers.create');
    }
    
    public function store(Request $request)
    {
        $request->validate(['content' => 'required|max:255']);
        
        $request->user()->answers()->create(['content' => $request->content]);
        
        return back();
    }
    
    public function destory($id)
    {
        $answer = \App\Answer::findOrfail($id);
        
        if(\Auth::id() === $answer->user_id) {
            $answer->delete();
        }
        
        return back();
    }
}
