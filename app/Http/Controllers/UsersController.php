<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function index()
    {
        $data =[];
        
        if(\Auth::check()){
            $user = \Auth::user();
            
            $questions = Question::all()->content();
            
            $data = [
                'user' => $user,
                'questions' => $questions,
            ];
        };
        
        return view('welcome', $data);
    }
    
    public function show($id)
    {
        $user = User::findOrfail($id);
        
        return view('users.show', ['user' => $user]);
    }
    
    public function edit($id)
    {
        $user = User::findOrfail($id);
        
        if(\Auth::id() === $user->id) {
        return view('users.edit', ['user' => $user]);
        };
    }
    
    public function update(Request $request, $id)
    {
        $user = User::findOrfail($id);
        
        if(\Auth::id() === $user->id){
        $user->name = $request->name;
        $user->icon_url = $request->icon_url;
        $user->save();
        }
        
        return redirect('user.show');
    }
    
    public function destroy($id)
    {
        $user = findOrfail($id);
        
        if(\Auth::id() === $user->id){
        
        $user->delete();
        }
        
        return redirect('/');
    }
    
 
}
