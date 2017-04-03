<?php

namespace App\Http\Controllers;

use App\implementing_partner;
use Illuminate\Http\Request;

use App\Http\Requests;

class HFacilityIPController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Display Available IPs
    public function index()
    {
        //$ips = implementing_partner::with('fundingAgency')->get()->toArray();
        $items = implementing_partner::pluck('name', 'ip_id');
        //dd($items);
        return view('layouts.iplist', compact('ips', 'items'));
    }

}
