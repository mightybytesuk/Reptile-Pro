<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $userCheck = DB::table('users')->where('email', $request->email)->count();

        if($userCheck > 0)
        {
            dd('user already registered');
        }else{
            $user = User::create(request(['name', 'email', 'password']));
        
            auth()->login($user);
    
            return(Auth::user()->name);
        }
    }
}
