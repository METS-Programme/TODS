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
            ->where('stock_status', '=', $minStock)
            ->count('tools_id'); //Get Critical item in stock ->limit(1)->get();


        $deliveries = delivery::orderBy('delivery_id', 'desc')->first();//get total deliveries
        $printOrders = print_order::orderBy('printorder_id', 'DESC')->first();//get total tools ordered from printing

        $stockStatus = Tool::orderBy('stock_status', 'ASC')->limit(5)->get();

        /**
         * Check if the following variables are not null
         */
        $totalStock = ($totalStock >= null) ? $totalStock : 0;
        $criticalStock = (!isset($criticalStock)) ? ['code'=>0,'name'=>0,'stock_status'=>0]: $criticalStock;
        $deliveries = ($deliveries >= null) ? $deliveries : 0;
        $printOrders = ($printOrders >= null) ? $printOrders : 0;


        return view('layouts.home', compact('ips','totalStock','criticalStock', 'printOrders', 'deliveries', 'stockStatus'));
    }

}
