<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionsController extends Controller
{
    public function index()
    {
        $data =[];
        
        if(\Auth::check()){
            $user = \Auth::user();
            
            $questions = Question::all();
            
            $data = [
                'user' => $user,
                'questions' => $questions,
            ];
        };
        
        return view('welcome', $data);
    }
    
    public function create()
    {
        return view('questions.create');
    }
    
    public function store(Request $request)
    {
        $request->validate(['content' => 'required|max:255']);
        
        $request->user()->questions()->create([
                'content' => $request->content,
            ]);
            
            return redirect('answers.create');
    }
    
    public function destroy($id)
    {
        $question = Question::findOrfail($id);
        
        if(\Auth::id() === $question->user_id){
            $question->delete();
        }
        
        return redirect('/');
    }
    
    public function followings()
    {
        
    }
}