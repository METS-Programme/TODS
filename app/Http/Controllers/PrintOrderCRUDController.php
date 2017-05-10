<?php

namespace App\Http\Controllers;

use App\print_order;
use App\print_order_details;
use App\Tool;
use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

//  trait ShowPrintOrders{
//      public function show($printorder_id)
//      {
//          $printorder = print_order::find($printorder_id);
//          $printOrderDetails = print_order_details::where('printorder_id',$printorder_id)->get()->toArray();
//
//          $printOrderDetail = DB::table('print_order_details')->distinct()->select('lpo_number', 'printorder_id', 'name',
//              'quantity_ordered')
//              ->join('tools', 'tools.tools_id', '=', 'print_order_details.tools_id')
//              ->where('printorder_id', '=', $printorder_id)
//              ->get();
//
//          return view('layouts.print orders.printorder_details', compact('printorder','printOrderDetails','printOrderDetail'));
//      }
//  }
class PrintOrderCRUDController extends Controller{


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
            $toolname[$codeandname->tools_id]=$codeandname->code.' '.$codeandname->name;
        }
        $printorders= print_order::orderBy('printorder_id', 'DESC')->paginate(20);
        //$printOrderDetails = print_order_details::all();

        return view('layouts.print orders.ordersmade', compact('printorders', 'toolname'));
//            ->with ('i', ($request->input('page',1)-1)*20);
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

        $input = $request->all();

        $total_tools_ordered = 0;
        foreach ($input['quantity_ordered'] as $total){
            $total_tools_ordered+=$total;
        }

        $printorder_id = DB::table('printing_orders')->insertGetId(
            ['lpo_number' => $input['lpo_number'],
                'date_ordered' => $input['date_ordered'],
                'tools_duration' => $input['tools_duration'],
                'ordered_by' => $input['ordered_by'],
                'ordered_to' => $input['ordered_to'],
                'comment' => $input['comment'],
                'total_tools_ordered' => $total_tools_ordered
            ]
        );


        $tools = $input['tools_id'];
        $quantities = $input['quantity_ordered'];

        $orderDetails = array();
        foreach ($tools as $key => $tool_id){
            $value = $quantities[$key];
            $orderDetails[] = array('lpo_number'=> $input['lpo_number'],
                                    'printorder_id'=>$printorder_id,
                                    'tools_id' => $tool_id,
                                    'quantity_ordered'=>$value );
        }

        DB::table('print_order_details')->insert($orderDetails); //Insert the print order details into Print Order details table

        //$input['printorder_id'] = $printorder_id;
        //print_order_details::create($input); //Update the HFC-IP Mapping table

        //print_order::create($request->all());
        return redirect()->route('printorderCRUD.index')
            ->with('success','Order placed successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//      use ShowPrintOrders;
    public function show($printorder_id)
    {
        $printorder = print_order::find($printorder_id);
        $printOrderDetails = print_order_details::where('printorder_id',$printorder_id)->get()->toArray();

        $printOrderDetail = DB::table('print_order_details')->distinct()->select('lpo_number', 'printorder_id', 'name',
            'quantity_ordered')
            ->join('tools', 'tools.tools_id', '=', 'print_order_details.tools_id')
            ->where('printorder_id', '=', $printorder_id)
            ->get();

            return view('layouts.print orders.printorder_details', compact('printorder','printOrderDetails','printOrderDetail'));
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
