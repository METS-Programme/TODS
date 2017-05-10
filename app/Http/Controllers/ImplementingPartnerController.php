<?php

namespace App\Http\Controllers;

use App\allocation;
use App\Facility;
use App\funding_agency;
use App\h_facility_implementing_partner;
use App\implementing_partner;
use App\Tool;
use Illuminate\Http\Request;
use DB;

//use Illuminate\Support\Facades\Input;
//use Carbon\Carbon;
//use App\Http\Requests;


//use Request;

class ImplementingPartnerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //Display Available IPs
    public function index()
    {
//      $ips = implementing_partner::all();
//      $ip = implementing_partner::find(1);
        //$items = funding_agency::all();
        $ipz = DB::table('implementing_partner')->distinct()->select('ip_id','implementing_partner.name',
            'comprehensive_partner','regions','districts','vision','location',
            'about','image','implementing_partner.created_at as ipCreatedDate','funding_agency.name as faName')
            ->join('funding_agency', 'funding_agency.funding_agency_id', '=', 'implementing_partner.funding_agency_id')
            ->get();
        //$ips = implementing_partner::with('fundingAgency')->get()->toArray();
        $items = funding_agency::pluck('short_name', 'funding_agency_id');
          return view('layouts.iplist', compact('ips', 'items', 'ipz'));
    }

    /**Create New IP*/
    public function createIp()
    {
        //return $users; this returns json
        //return view('includes.ipForm', compact('items'));
        return view('layouts.iplist');
    }
    /**Store Date in the database*/
    //public function store(Requests\createIpRequest $request){ //If you use a request class for validation
    public function store(Request $request)
    {

        //Validation within the controller
        $this->validate($request,
            ['name' => 'required|min:2',
                'comprehensive_partner' => 'required',
                'funding_agency_id' => 'required',
                //'image' => 'required' //|image|mimes:jpeg,png,jpg,gif,svg|max:2048
            ]); //Do this to have validation within controller class

        //Rename and Move Image to image folder under public
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

        $input = $request->all();
        $input['image'] = $imageName; //Add new image name to the request before saving

        implementing_partner::create($input); //Mass create data

        return redirect('ips');
    }

    /**
     * Display the specified resource.
     * This Control what is displayed on Implementing partner Dashboard
     */
    public function show($ip_id)
    {
        $ips = implementing_partner::find($ip_id);
        $facilities = Facility::where('ip_id', $ip_id)->groupBy('facilitylevel_id')->get();//get all facilities supported by IP

        //return all facilities supported by an IP
        $healthFacilities = DB::table('health_facility')->select('health_facility.healthfacility_id',
            'health_facility.name as facilityName', 'health_facility.code', 'facility_level.name as levelName',
            'subcounty.name as subcountyName','health_facility.facilitylevel_id')
            ->join('facility_level', 'facility_level.facilitylevel_id', '=', 'health_facility.facilitylevel_id')
            ->join('subcounty', 'subcounty.subcounty_id', '=', 'health_facility.subcounty_id')
            ->where(['health_facility.ip_id' => $ip_id])
//            ->groupBy('health_facility.facilitylevel_id')
            ->get();
        $totalFacilities = count($healthFacilities); //Count of all facilities supported by IP

        //Count number of Facility Levels Suppoted by one IP
        $noFacilityLevel = DB::table('health_facility')
            ->select(DB::raw('count(*) as facilityLevel_count, facilitylevel_id'))
            ->where('health_facility.ip_id', '=', $ip_id)
            ->groupBy('health_facility.facilitylevel_id')
            ->get();

        //Show base allocation for IP on IP dashboard URL baseURL/ips/ip_id
        foreach ($facilities as $facility) {
            //return Base allocation for an IP
            $facilityLevelId = $facility['facilitylevel_id'];
            $facilityID = $facility['healthfacility_id'];
            $allocation[] = DB::table('allocation')->distinct()->select('allocation.date_allocated', 'allocation.tool_id as toolId',
                'allocation.health_facility_level_id as levelId', 'allocation.quantity', 'allocation.allocated_by',
                'tools.name as toolName', 'facility_level.name as facilityLevel', 'health_facility.name as facilityName')
                ->join('health_facility','health_facility.facilitylevel_id','=','allocation.health_facility_level_id')
                ->join('tools', 'tools.tools_id', '=', 'allocation.tool_id')
                ->join('facility_level', 'facility_level.facilitylevel_id', '=', 'allocation.health_facility_level_id')
                ->where(['allocation.health_facility_level_id' => $facilityLevelId, 'health_facility.healthfacility_id'=>$facilityID] )
//                ->groupBy('allocation.health_facility_level_id')
                ->get();
        }

        $array = array();
        $index = 0;
        if(!empty($allocation)) {
            for ($index = 0; $index < count($allocation); $index++) {
                foreach ($allocation[$index] as $alloc_obj) {
                    array_push($array, get_object_vars($alloc_obj));
                }
            }
        }
        else{
            $array = array();
        }

//        print_r($array);
//        $ids = array();
        $allocated_id = array();
        $all_allocation = array();
        foreach ($array as $tool_allocated){
            if(in_array($tool_allocated['toolId']."|".$tool_allocated['toolName'], $allocated_id)){
                $total_allocated = $all_allocation[$tool_allocated['toolId']."|".$tool_allocated['toolName']]+ $tool_allocated['quantity'];
                $all_allocation[$tool_allocated['toolId']."|".$tool_allocated['toolName']] = $total_allocated;
            }else{
                $all_allocation[$tool_allocated['toolId']."|".$tool_allocated['toolName']] = $tool_allocated['quantity'];
                array_push($allocated_id, $tool_allocated['toolId']."|".$tool_allocated['toolName']);
            }
        }


//        print_r($all_allocation);
//        $grouped = $allocation->groupBy('toolId');
//        print_r($grouped);

        //$end = $grouped->toArray();
        //print_r($grouped);

//        $temp = [];
//
//        foreach ($healthFacilities as $k => $v) {
//            foreach ($v as $kk => $kv) {
//                $temp[$kv->levelName][] = $kv->facilityName;
//            }
//        }
//        //print_r($ip_facilities);
//
//        print_r(count($temp['HCIII']));


        return view('layouts.ip_dashboard.ipdashboard',
            compact('ips', 'facilities', 'totalFacilities', 'allocation', 'healthFacilities', 'noFacilityLevel', 'array', 'all_allocation'));
    }

    /**
     * edit a partner
     */
    public function edit($id)
    {
        $ips = implementing_partner::findOrFail($id);
        return view('layouts.iplist', compact('ips'));
    }

    /**Update an implementing partner*/
    public function update()
    {

    }

    public function listFundingAgencies()
    {
        /* $items = funding_agency::lists(['id', 'name']);

         return view('includes.ipForm', compact('items'));*/

        /*   $items = Subject::all(['id', 'name']);
           return View::make('includes.ipForm', compact('items',$items));*/
    }
}
