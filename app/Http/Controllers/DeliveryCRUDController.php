<?php

namespace App\Http\Controllers;

use App\delivery;
use Illuminate\Http\Request;
use App\Tool;
use App\print_order;
use App\print_order_details;
use App\Http\Requests;
use DB;
//app('App\Http\Controllers\PrintOrderCRUDController')->show();
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
        //Get the tools
        $toolnames=Tool::all();
        foreach ($toolnames as $codeandname){
            $toolname[$codeandname->tools_id]=$codeandname->code.' '.$codeandname->name;
        }
        $printorders= print_order::orderBy('printorder_id','desc')->pluck('lpo_number', 'lpo_number');


        $delivery=delivery::orderBy('delivery_id','DESC')->paginate(5);
        return view('layouts.deliveries.deliveries',compact('delivery', 'ordernumber','toolname','printorders'));
//            ->with('i',($request->input('page',1)-1)*5);
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
            'lpo_number'=>'required',
            'date_delivered'=>'required',
            'delivered_by'=>'required',
            'received_by'=>'required',
        ]);

        $input = $request->all();
        $total_tools_delivered = 0;
        foreach ($input['quantity_delivered'] as $total){
            $total_tools_delivered+=$total;
        }
        $delivery_id = DB::table('delivery')->insertGetId(
            [
                'lpo_number' => $input['lpo_number'],
                'date_delivered' => $input['date_delivered'],
                'delivered_by' => $input['delivered_by'],
                'received_by' => $input['received_by'],
                'printingorder_id' => $input['printingorder_id'],
                'comment' => $input['comment'],
                'total_tools_delivered' => $total_tools_delivered
            ]
        );

        $tools = $input['tools_id'];
        $quantities = $input['quantity_delivered'];
        $deliveryDetails = array();
        foreach ($tools as $key => $tool_id){
            $value = $quantities[$key];
            $deliveryDetails[] = array('lpo_number'=> $input['lpo_number'],
                                        'quantity'=>$value,
                                        'tools_id' => $tool_id,
                                        'delivery_id'=>$delivery_id,
                                         );
            if (!empty($value)) {
                    $stockDelivered[] = array(
                        'delivery_status' => $value,
                        'tools_id' => $tool_id
                    );
            }
            continue;

        }
        /**
         * Insert Into Tools DElivert Table the Delivery Details
         */
        DB::table('tools_delivered')->insert($deliveryDetails);

        /**
         * Update Tools Table increment stock_status
         */
        foreach ($stockDelivered as $stock){
//            if (isset($stock['delivery_status'])) {
                DB::table('tools')
                    ->where('tools_id', $stock['tools_id'])
                    ->increment('stock_status', $stock['delivery_status']);
//            }
//            continue;
        }


        return redirect()->route('deliveryCRUD.index')
            ->with('success','deliverer registered successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($delivery_id)
//    {
//        $delivery=delivery::find($delivery_id);
//        return view('layouts.deliveries.deliverydetails',compact('delivery'));
//    }


    public function show($delivery_id)
    {
        $delivery = delivery::find($delivery_id);
       // $deliveryDetails = tools_delivered::where('delivery_id',$delivery_id)->get()->toArray();

        $deliveryDetail = DB::table('tools_delivered')->distinct()->select('lpo_number', 'delivery_id', 'name',
            'quantity')
            ->join('tools', 'tools.tools_id', '=', 'tools_delivered.tools_id')
            ->where('delivery_id', '=', $delivery_id)
            ->get();

        return view('layouts.deliveries.deliverydetails', compact('delivery','deliveryDetail'));
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
