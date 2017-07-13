<?php

namespace App\Http\Controllers;

use App\package;
use App\service_area;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tool;

class ToolsCRUDController extends Controller
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
        $serviceareafortool=service_area::pluck('name','servicearea_id');
        $packagefortool=package::pluck('package_name','package_id');
        $servicearea14= Tool::all();
        foreach ($servicearea14 as $servicearea) {
            $servicea[] = service_area::find($servicearea->servicearea_id);
        }


        $tools=Tool::orderBy('stock_status', 'DESC')->get();
        return view('layouts.tool registration.registered_tools', compact('tools', 'serviceareafortool', 'packagefortool', 'servicea'));
//            ->with('i',($request->input('page',1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.tool registration.registered_tools');
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
//            'code' => 'required',
//            'specification' => 'required',
//            'description' => 'required',
        ]);

        Tool::create($request->all());
        return redirect()->route('tools.index')
                         ->with('success', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tools_id)
    {
        $tool= Tool::find($tools_id);
        return view('layouts.tool registration.show_tool', compact('tool'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($tools_id)
    {
        $tool=Tool::find($tools_id);
        return view('layouts.tool registration.registered_tools', compact('tool', $tool));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$tools_id)
    {
        $tool=Tool::find($tools_id);
        $tool->name=$request->name;
        $tool->code=$request->code;
        $tool->specification=$request->specification;
        $tool->service_area=$request->service_area;
        $tool->description=$request->description;
        $tool->save();

        $this->validate($request, [
            'name'=> 'required'
//            'code' => 'required',
//            'specification' => 'required',
//            'service_area' => 'required',
//            'description' => 'required'
        ]);
        Tool::find($tools_id)->update($request->all());
        return redirect()->route('tools.index')
            ->with('success','Tool updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($tools_id)
    {
        Tool::find($tools_id)->delete();

        return redirect()->route('tools.index')
            ->with('success','Tool deleted successfully');
    }


}
