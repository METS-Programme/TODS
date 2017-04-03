<?php

namespace App\Http\Controllers;

use App\funding_agency;
use App\implementing_partner;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Input;
//use Carbon\Carbon;



//use App\Http\Requests;


//use Request;

class ImplementingPartnerController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //Display Available IPs
    public function index()
    {
//      $ips = implementing_partner::all();
//      $ip = implementing_partner::find(1);
        //$items = funding_agency::all();
        $ips = implementing_partner::with('fundingAgency')->get()->toArray();
        $items = funding_agency::pluck('short_name', 'funding_agency_id');
        //dd($items);
        return view('layouts.iplist', compact('ips', 'items'));
    }

    /**Create New IP*/
    public function createIp()
    {
        //return $users; this returns json
        //return view('includes.ipForm', compact('items'));
        return view('layouts.iplist');
    }
    /**Store Date in the database*/
    //public function store(Requests\createIpRequest $request){ //If you use a request class for validation
    public function store(Request $request)
    {

        //Validation within the controller
        $this->validate($request,
            [   'name' => 'required|min:2',
                'comprehensive_partner' => 'required',
                'funding_agency_id' => 'required',
                //'image' => 'required' //|image|mimes:jpeg,png,jpg,gif,svg|max:2048
            ]); //Do this to have validation within controller class

        //Rename and Move Image to image folder under public
        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

        $input = $request->all();
        $input['image'] = $imageName; //Add new image name to the request before saving

        implementing_partner::create($input); //Mass create data

        return redirect('ips');
    }

    /**
     * Display the specified resource.
     */
    public function show($ip_id)
    {
        $ips =implementing_partner::find($ip_id);
        return view('layouts.ip_dashboard.ipdashboard',compact('ips'));
    }

    /**
     * edit a partner
     */
    public function edit($id)
    {
        $ips = implementing_partner::findOrFail($id);
        return view('layouts.iplist', compact('ips'));
    }

    /**Update an implementing partner*/
    public function update()
    {

    }

    public function listFundingAgencies()
    {
        /* $items = funding_agency::lists(['id', 'name']);

         return view('includes.ipForm', compact('items'));*/

        /*   $items = Subject::all(['id', 'name']);
           return View::make('includes.ipForm', compact('items',$items));*/
    }
}
