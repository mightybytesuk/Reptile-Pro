<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AnimalController extends Controller
{
    public function create()
    {
        return view('listings.create');
    }

    public function store(Request $request)
    {
        $image = 'nothing';

        $animal = Animal::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
            'user_id' => Auth::user()->id,
            'category' => 'test',
            'price' => $request->price,
            'location' => $request->location,
            'sex' => $request->gender,
            'breed' => $request->morph,
            'age' => $request->age,
        ]);
        return redirect('/create');
    }

    public function viewAll()
    {
        $animals = DB::table('animals')->where('user_id', Auth::user()->id)->get();

        return view('listings.manage',[
            'animals' => $animals
        ]);

    }
}
