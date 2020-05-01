<?php

namespace App\Http\Controllers;

use App\Cruise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CruiseInfoController extends Controller
{
    //
    public function index()
    {
//        $cruises=Cruise::all();
//        return view('CruiseInfo',['cruises'=>$cruises]);
    }

    public function getInfo(Request $request)
    {
        $id = $request->input('idc');
        $pid = $request->input('idp');
//        print_r($pid);
//        print_r($id);
        $provider = DB::select('select * from cruise_provider where provider_id=?',[$pid]);
//        print_r($provider);
        $cruises =  DB::select('select * from cruise where cruise_id=? ',[$id]);
//        print_r($cruises);
        return view('CruiseInfo', ['cruises' => $cruises],['provider' => $provider]);



    }
}
