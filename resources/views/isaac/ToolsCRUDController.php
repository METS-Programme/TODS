<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tool;

class ToolsCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tools=Tool::orderBy('tools_id', 'DESC')->paginate(5);
        return view('layouts.tool registration.registered_tools', compact('tools'))
            ->with('i',($request->input('page',1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.tool registration.tools_registration');
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
            'specification' => 'required',
            'description' => 'required'
        ]);
        Tool::create($request->all());
        return redirect()->route('toolCRUD.index')
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
        return view('layouts.tool registration.edit_tool', compact('tool'));
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
        $this->validate($request, [
            'name'=> 'required',
            'code' => 'required',
            'specification' => 'required',
            'service_area' => 'required',
            'description' => 'required'
        ]);
        Tool::find($tools_id)->update($request->all());
        return redirect()->route('toolCRUD.index')
            ->with('success','Product updated successfully');
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
        return redirect()->route('toolCRUD.index')
            ->with('success','Product deleted successfully');
    }
}
