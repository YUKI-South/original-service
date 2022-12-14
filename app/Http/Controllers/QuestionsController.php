<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionsController extends Controller
{
    public function index()
    {
        $data = [];
        
        if(\Auth::check()){
            $user = \Auth::user();
            
            $questions = Question::orderBy('created_at')->paginate(10);
            
            
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
        
        $question = $request->user()->questions()->create([
            'content' => $request->content,
        ]);
            
        return redirect()->route('questions.show', ['question' => $question->id]);
    }
    
    public function show($id)
    {
        $question = Question::findOrfail($id);
    
        $data = [];
        
        $answers = \App\Answer::all();
        
        $data = [
            'question' => $question,
            'answers' => $answers,
            ];
        
        return view('questions.show', $data);
        
    }
    
    public function destroy($id)
    {
        $question = Question::findOrfail($id);
        
        if(\Auth::id() === $question->user_id){
            $question->delete();
        }
        
        return redirect()->route('questions.myQuestion');
    }
    
    public function followings()
    {
        $data = [];
        
        if(\Auth::check()) {
            $user = \Auth::user();
            
            $questions = $user->feed_questions()->orderBy('created_at', 'desc')->paginate(10);
            
            $data = [
                'user' => $user,
                'questions' => $questions,
                ];
                
                return view('questions.followings', $data);
        }
    }
    
    public function myQuestion()
    {
        $data = [];
        $user = \Auth::user();
        
       
        $questions = $user->questions()->orderBy('created_at', 'desc')->paginate(10);
            
        $data = [
            'user' => $user,
            'questions' => $questions,
            ];
                
        return view('questions.myQuestion', $data);
    }
}
