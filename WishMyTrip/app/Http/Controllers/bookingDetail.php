<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bookingDetail extends Controller
{
    //
    public function index()
    {
        return view('BookingDetail');
    }

    public function store(Request $request)
    {
        $id = $request->input('idc');
        $pid = $request->input('idp');
        $provider = DB::select('select * from cruise_provider where provider_id=?',[$pid]);

        $cruises =  DB::select('select * from cruise where cruise_id=? ',[$id]);
        return view('BookingDetail', ['cruises' => $cruises],['provider' => $provider]);

    }
}
