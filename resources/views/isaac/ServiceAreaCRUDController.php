<?php
namespace App\Http\Controllers;
//controller for creating, reading, updating and deleting service areas
use Illuminate\Http\Request;

use App\Http\Requests;

use App\service_area;

class ServiceAreaCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $service_area=service_area::orderBy('servicearea_id', 'DESC')->paginate(5);
       return view('layouts.service area.registered_service_areas', compact('service_area'))
            ->with('i',($request->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.service area.register_service_area');
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
            'name'=>'required',
            'description'=>'required',
        ]);

        service_area::create($request->all());
        return redirect()->route('serviceAreaCRUD.index')
            ->with('success', 'Service Area registered successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($servicearea_id)
    {
        $service_area=service_area::find($servicearea_id);
        return view('layouts.service area.show_service_area', compact('service_area'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($servicearea_id)
    {
        $service_area=service_area::find($servicearea_id);
        return view('layouts.service area.edit_service_area', compact('service_area'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $servicearea_id)
    {
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
        ]);
        service_area::find($servicearea_id)->update($request->all());
        return redirect()->route('serviceAreaCRUD.index')
            ->with('suceess','Service Area updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($servicearea_id)
    {
        service_area::find($servicearea_id)->delete();
        return redirect()->route('serviceAreaCRUD.index')
            ->with('success','Service Area deleted successfully');
    }
}
