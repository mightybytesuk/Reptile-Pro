<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SessionsController extends Controller
{
    public function create()
    {
        return view('login.create');
    }
    
    public function store(Request $request)
    {
        $password = Hash::make($request['password']);
        if (auth()->attempt(request(['email']), $password) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        return redirect()->to('/games');
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/games');
    }
}