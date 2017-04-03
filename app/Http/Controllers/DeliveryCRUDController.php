<?php

namespace App\Http\Controllers;

use App\delivery;
use App\print_order;
use Illuminate\Http\Request;

use App\Http\Requests;

//use App\deliveries;


class DeliveryCRUDController extends Controller
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
        $ordernumber=delivery::all();
//        foreach ($ordernumbers as $ordernumber){
//            $ordernumber[$ordernumber->delivery_id]=$ordernumber->lpo_number;
//        }
        $delivery=delivery::orderBy('delivery_id','DESC')->paginate(5);
        return view('layouts.deliveries.deliveries',compact('delivery', 'ordernumber'))
            ->with('i',($request->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.deliveries.register_newdelivery');
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
            'printing_agency'=>'required',
            'date_delivered'=>'required',
            'delivered_by'=>'required',
            'received_by'=>'required',
        ]);
        delivery::create($request->all());
        return redirect()->route('deliveryCRUD.index')
            ->with('success','deliverer registered successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($delivery_id)
    {
        $delivery=delivery::find($delivery_id);
        return view('layouts.deliveries.deliverydetails',compact('delivery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($delivery_id)
    {
        $delivery=delivery::find($delivery_id);
        return view('layouts.deliveries.editdelivery',compact('delivery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $delivery_id)
    {
     $this->validate($request,[
         'printing_agency'=>'required',
         'date_delivered'=>'required',
         'delivered_by'=>'required',
         'received_by'=>'required',
     ]);
     delivery::find($delivery_id)->update($request->all());
     return redirect()->route('deliveryCRUD.index')
         ->with('success','Delivery updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($delivery_id)
    {
        delivery::find($delivery_id)->delete();
        return redirect()->route('deliveryCRUD.index')
        ->with('success','Delivery deleted successfully');
    }
}
