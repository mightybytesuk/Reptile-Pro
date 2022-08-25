<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function welcome()
    {
        $animals = DB::table('animals')->get();

        return view('welcome', [
            'animals' => $animals
        ]);
        
    }
}
