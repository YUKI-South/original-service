<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    
    public function show($id)
    {
        $user = User::findOrfail($id);
        
        $user->loadRelationshipCounts();
        
        return view('users.show', ['user' => $user]);
    }
    
   
    
 
}
