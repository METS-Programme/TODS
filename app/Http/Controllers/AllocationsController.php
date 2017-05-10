<?php

namespace App\Http\Controllers;

use App\allocation;
use App\implementing_partner;
use Illuminate\Http\Request;
use App\FacilityLevel;
use App\Item;
use Excel;

use App\Http\Requests;

class AllocationsController extends Controller
{
    //Authentication
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Display Available IPs
    public function index()
    {
        $toolsAllocation = allocation::all();
        //$level = facilityLevel::pluck();

//        foreach ($toolsAllocation as $toolA){
//            $ips[] = implementing_partner::find($toolA->ip_id);
//        }

        return view('layouts.allocations', compact('toolsAllocation', 'level'));
    }

    public function showTools()
    {

    }
    /**
     * Return View file
     */
//    public function importExport()
//    {
//        return view('layouts.importExport');
//    }

    /**
     * File Export Code
     */
    public function downloadExcel(Request $request, $type)
    {
        $date = date('Y-m-d');
        $data = allocation::get()->toArray();
        return Excel::create('allocation_'.$date, function ($excel) use ($data) {
            $excel->sheet('mySheet', function ($sheet) use ($data) {
                $sheet->fromArray($data);
            });
        })->download($type);
    }
    /**
     * Import file into database Code
     */
    public function importExcel(Request $request)
    {

        if ($request->hasFile('import_file')) {
            $path = $request->file('import_file')->getRealPath();

            $data = Excel::load($path, function ($reader) {})->get();

            if (!empty($data)) {
                $insert = $data->toArray();

                if (!empty($insert)) {
                    try {
                        allocation::insert($insert);
                        return back()->with('success', 'Records Inserted successfully.');

                    } catch (\Exception $e) {
                        //Item::rollback();
                        return back()->with('error', 'Duplicate entry in the database, please check the file and try again.');
                    }
                }
            }
            return back()->with('error', 'There is no data in the file, Check file and try again.');
        }
        return back()->with('error', 'Please Check your file, Something is wrong there.');
    }

}
