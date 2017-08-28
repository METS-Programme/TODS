<?php

namespace App\Http\Controllers;

use App\FacilityLevel;
use App\implementing_partner;
use App\SubCounty;
use Illuminate\Http\Request;


use App\Http\Requests;

class facility extends Controller
{
    //Authentication
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $implementingpartnerforfacility=implementing_partner::lists('name','ip_id');
        $subcountyforfacility=SubCounty::pluck('name','subcounty_id');
        $levelforfacility=FacilityLevel::pluck('name','facilitylevel_id');
        $implementingpartnerhf= \App\Facility::all();
        foreach ($implementingpartnerhf as $implementingpartner) {
            $implementingp[] = implementing_partner::find($implementingpartner->ip_id);
        }
        $subcountyhf= SubCounty::all();
        foreach ($subcountyhf as $subcounty) {
            $subc[] = SubCounty::find($subcounty->subcounty_id);
        }
        $levelhf= FacilityLevel::all();
        foreach ($levelhf as $facilitylevel) {
            $level[] = FacilityLevel::find($facilitylevel->facilitylevel_id);
        }

        $facilities = \App\Facility::orderBy('healthfacility_id', 'ASC')->paginate(50);
//        $facilities = \App\Facility::all();

        return view('layouts.facility registration.facilitiesRegistered', compact('facilities', 'implementingpartnerforfacility', 'subcountyforfacility', 'levelforfacility'));
           // ->with('i',($request->input('page',1) -1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.facility registration.facilitiesRegistered');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=> 'required',
            'code' => 'required',
            'ip_id' => 'required',
            'subcounty_id' => 'required',
            'facilitylevel_id' => 'required',
        ]);

        $input = $request->all();
        $healthfacility_id =\App\Facility::create($input)->healthfacility_id; //create a facility and get the most recent saved facility ID

        $input['health_facility_id'] = $healthfacility_id;
        \App\h_facility_implementing_partner::create($input); //Update the HFC-IP Mapping table

        return redirect()->route('facility.index');
//            ->with('success', 'Facility registered successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($healthfacility_id)
    {
        $implementingpartnerforfacility=implementing_partner::pluck('name','ip_id');
        $subcountyforfacility=SubCounty::pluck('name','subcounty_id');
        $levelforfacility=FacilityLevel::pluck('name','facilitylevel_id');
        $implementingpartnerhf= \App\Facility::all();
        foreach ($implementingpartnerhf as $implementingpartner) {
            $implementingp[] = implementing_partner::find($implementingpartner->ip_id);
        }
        $subcountyhf= SubCounty::all();
        foreach ($subcountyhf as $subcounty) {
            $subc[] = SubCounty::find($subcounty->subcounty_id);
        }
        $levelhf= FacilityLevel::all();
        foreach ($levelhf as $facilitylevel) {
            $level[] = FacilityLevel::find($facilitylevel->facilitylevel_id);
        }

        $healthfacilities= \App\Facility::find($healthfacility_id);
        return view('layouts.facility registration.facilitiesRegistered', compact('healthfacilities'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($healthfacility_id)
    {
        $healthfacilities=\App\Facility::find($healthfacility_id);
        return view('layouts.facility registration.facilitiesRegistered', compact('healthfacilities', $healthfacilities));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$healthfacility_id)
    {
        $healthfacilities=\App\Facility::find($healthfacility_id);
        $healthfacilities->name=$request->name;
        $healthfacilities->code=$request->code;
        $healthfacilities->ip_id=$request->ip_id;
        $healthfacilities->facilitylevel_id=$request->facilitylevel_id;
        $healthfacilities->subcounty_id=$request->subcounty_id;
        $healthfacilities->save();

        $this->validate($request, [
            'name'=> 'required',
            'code' => 'required',
            'ip_id' => 'required',
            'facilitylevel_id' => 'required',
            'subcounty_id' => 'required'
        ]);
        \App\Facility::find($healthfacility_id)->update($request->all());
        return redirect()->route('facility.index')
            ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($healthfacility_id)
    {
        \App\Facility::find($healthfacility_id)->delete();

        return redirect()->route('facility.index')
            ->with('success','Product deleted successfully');
    }


}
