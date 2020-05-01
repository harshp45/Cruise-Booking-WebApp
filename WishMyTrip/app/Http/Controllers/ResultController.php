<?php

namespace App\Http\Controllers;

use App\Cruise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    //
    public function index()
    {
        $cruises=Cruise::all();
        return view('Result',['cruises'=>$cruises]);
    }

    public function getList(Request $request)
    {
        $this->validate($request, [
            'source' => 'required|not_in:0',
            'destination' =>'required',
            'dateoftravel' =>'required',
            'ship' => 'required',
            'dp' => 'required',
            'nights' => 'required'

        ]);

        $source=$request->input('source');
        $destination=$request->input('destination');
        $shipname=$request->input('ship');
        $dp=$request->input('dp');
        $nights=$request->input('nights');
        $providerName=$request->input('providerName');
        $price=$request->input('price');

        $cruises= DB::select('select * from cruise where cruise_source=? and cruise_departure_port=? and cruise_destination=? ',[$source,$dp,$destination]);

        if($cruises !=null) {
            return view('Result', ['cruises' => $cruises]);
        }
        else
        {
            return view('noResult');
        }





    }

}
