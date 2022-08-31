<?php

namespace App\Http\Controllers;

use App\Models\CareSheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CareSheetController extends Controller
{
    public function list()
    {
        $careSheets = DB::table('care_sheets')->get();

        return view('caresheets.view',[
            'caresheets' => $careSheets
        ]);
    }

    public function create()
    {
        return view('caresheets.create');
    }

    public function store(Request $request, CareSheet $careSheet)
    {
        $this->authorize('create', $careSheet);
        return($request->all());
    }
}
