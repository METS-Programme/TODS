<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ToolsregController extends Controller
{
    //Authentication
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function pickupTool(){
        return view('layouts.tool pickup');
    }
}
