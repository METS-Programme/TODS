<?php

namespace App\Http\Controllers;

use App\implementing_partner;
use App\print_order;
use Illuminate\Http\Request;
use App\Tool;
use App\delivery;

use App\Http\Requests;
use DB;

class AvailableToolsController extends Controller
{
    //Show available tools to be picked by IPs
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $ips = implementing_partner::all();
        return view('layouts.tools_available.available_tools_tobe_picked', compact('ips'));
    }
    public function homeBlock(){
        $ips = implementing_partner::take(6)->get();
//        $totalStock = DB::table('tools')->sum('stock_status');//Total count of Stock
        $totalStock = DB::table('tools')->select('tools_id','stock_status')
            ->where('stock_status', '>=', 10)
            ->count('tools_id');
        $minStock = DB::table('tools')->min('stock_status');//Get Min Stock
        $criticalStock = DB::table('tools')
            ->select('code','name','stock_status')
            ->where('stock_status', '=', $minStock)->get(); //Get Critical item in stock

        $deliveries = delivery::orderBy('delivery_id', 'desc')->first();//get total deliveries
        $printOrders = print_order::orderBy('printorder_id', 'DESC')->first();//get total tools ordered fro printing

        $stockStatus = Tool::orderBy('stock_status', 'ASC')->limit(5)->get();

        return view('layouts.home', compact('ips','totalStock','criticalStock', 'printOrders', 'deliveries', 'stockStatus'));
    }

}
