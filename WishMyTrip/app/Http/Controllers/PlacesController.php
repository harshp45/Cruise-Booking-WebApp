<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlacesController extends Controller
{
    //
    public function index()
    {
        $place = Place::all();
        return view('Places',['places'=> $place ]);
    }

    public function Search(Request $request)
    {
        $this->validate($request, [
            'job' => 'required'

        ]);
        $searchValue = $request->input('job');
//        print_r($searchValue);
        $place = DB::table('places')->where('place_name', $searchValue)->get();
        return view('Places', ['places' => $place]);
    }
}
