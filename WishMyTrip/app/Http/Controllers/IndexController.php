<?php

namespace App\Http\Controllers;

use App\Cruise;
use App\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{

    //
    public function index()
    {
        $cruises=Cruise::all();
        $provider=Provider::all();
        //return $cruises;
        return view('index', ['cruises' => $cruises],['providers'=>$provider]);

    }



}
