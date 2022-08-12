<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MyPageController extends Controller
{
    public function myPage()
    {
        $user = \Auth::user();
        
        $user->loadRelationshipCounts();
        
       
        return view('users.myPage', ['user' => $user]);
    }
    
    public function edit()
    {
        $user = \Auth::user();
        
       
        return view('users.edit', ['user' => $user]);
    }
    
     public function update(Request $request)
    {   
        $request->validate([
            'name' => 'required|max:255'
            ]);
            
        $user = \Auth::user();
        
        $image = $request->icon_url;
        
      
        if (!is_null($image)) {
            $path = Storage::disk('s3')->putFile('clear-up-bucket', $image, 'public');
            $iconUrl = Storage::disk('s3')->url($path);
            $user->icon_url = $iconUrl;
        }
        
        $user->name = $request->name;
        
        $user->save();
        
        return redirect('/users/myPage');
    }
    
     public function destroy()
    {
        $user = \Auth::user();
        
        $user->delete();
        
        return redirect('/');
    }
    
}
