<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Accessorie;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\In;

class AccessorieController extends Controller
{
    //

    public function index()
    {
        $accessorie = Accessorie::all();
        return view('Accessorie',['accessories'=>$accessorie]);
    }

    public function GetFemale()
    {
        $accessorie = DB::table('accessories')->where('accessories_category', 'Female')->get();
        return view('Accessorie',['accessories'=>$accessorie]);
    }

    public function GetMale()
    {
        $accessorie = DB::table('accessories')->where('accessories_category', 'Male')->get();
        return view('Accessorie',['accessories'=>$accessorie]);
    }

    public function GetKids()
    {
        $accessorie = DB::table('accessories')->where('accessories_category', 'Kids')->get();
        return view('Accessorie',['accessories'=>$accessorie]);
    }

    public function Search(Request $request)
    {

        $this->validate($request, [
            'job' => 'required'

        ]);
            $searchValue = $request->input('job');

            $accessorie = DB::table('accessories')->where('accessories_name', $searchValue)->get();
                return view('Accessorie', ['accessories' => $accessorie]);


    }
}
