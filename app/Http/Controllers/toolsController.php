<?php

namespace App\Http\Controllers;

use App\implementing_partner;
use App\tools_picked;
use Illuminate\Http\Request;

use App\Http\Requests;

class toolsController extends Controller
{
    //Authentication
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Display Available IPs
    public function index()
    {
        $toolsPicked = tools_picked::all();
        $items = implementing_partner::pluck('name', 'ip_id');
        /*  $items1 = implementing_partner::all();
            foreach($items1 as $patners){
            $items[$patners->ip_id] = $patners->name." | ".$patners->comprehensive_partner;
         }*/
        return view('layouts.tools-picked-list', compact('toolsPicked', 'items'));
    }

    public function showTools()
    {

    }

}
