<?php

namespace App\Http\Controllers;

use App\print_order;
use App\Tool;
use Illuminate\Http\Request;

use App\Http\Requests;

class PrintOrderCRUDController extends Controller
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
        //$toolname=Tool::lists('name', 'tools_id');
        $toolnames=Tool::all();
        foreach ($toolnames as $codeandname){
            $toolname[$codeandname->tools_id]=$codeandname->code."|".$codeandname->name;
        }
        $printorders= print_order::orderBy('printorder_id', 'DESC')->paginate(5);
        return view('layouts.print orders.ordersmade', compact('printorders', 'toolname'))
            ->with ('i', ($request->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('layouts.print orders.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'lpo_number'=>'required',
            'date_ordered'=>'required',
            'tools_duration'=>'required',
            //'tool_name_and_code'=>'required',
            'quantity_ordered'=>'required',
        ]);

        print_order::create($request->all());
        return redirect()->route('printorderCRUD.index')
            ->with('success','Order placed successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($printorder_id)
    {
        $printorder=print_order::find($printorder_id);
            return view(compact('printorder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($printorder_id)
    {
        $printorder=print_order::find($printorder_id);
        return view('layouts.print orders.edit_printorder',compact('printorder'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $printorder_id)
    {
        $this->validate($request, [
            'lpo_number'=>'required',
            'date_ordered'=>'required',
            'tools_duration'=>'required',
            //'tool_name_and_code'=>'required',
            'quantity_ordered'=>'required',
        ]);

        print_order::find($printorder_id)->update($request->all());
        return redirect()->route('printorderCRUD.index')
            ->with('success', 'Order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($printorder_id)
    {
        print_order::find($printorder_id)->delete();
        return redirect()->route('printorderCRUD.index')
            ->with ('success','Product deleted successfully');
    }

}
