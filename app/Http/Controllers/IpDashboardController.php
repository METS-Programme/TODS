<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IpDashboardController extends Controller
{
    //check Auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('layouts.ip_dashboard.ipdashboard');
    }
}
