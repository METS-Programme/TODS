<?php

namespace App\Http\Controllers;

use App\implementing_partner;
use Illuminate\Http\Request;

use App\Http\Requests;

class AvailableToolsController extends Controller
{
    //Show available tools to be picked by IPs
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $ips = implementing_partner::all();
        return view('layouts.tools_available.available_tools_tobe_picked', compact('ips'));
    }
    public function homeBlock(){
        $ips = implementing_partner::take(6)->get();
        return view('layouts.home', compact('ips'));
    }

}
