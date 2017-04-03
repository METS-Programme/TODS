<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Excel;

class MaatwebsiteDemoController extends Controller
{

    //Authentication
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Return View file
     */
    public function importExport()
    {
        return view('layouts.importExport');
    }

    /**
     * File Export Code
     */
    public function downloadExcel(Request $request, $type)
    {
        $date = date('Y-m-d');
        $data = Item::get()->toArray();
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
                        Item::insert($insert);
                        return back()->with('success', 'Insert Record successfully.');

                    } catch (\Exception $e) {
                        //Item::rollback();
                        return back()->with('error', 'Duplicate Entry In the Database, Check the file and try again.');
                    }
                }
            }
            return back()->with('error', 'There is no data in the file, Check file and try again.');
        }
        return back()->with('error', 'Please Check your file, Something is wrong there.');
    }

}
