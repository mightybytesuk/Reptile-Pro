<?php

namespace App\Http\Controllers;

use App\Models\CareSheet;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(CareSheet $careSheet)
    {
       
        return view('admin.index');
    }
}
