<?php

namespace App\Http\Controllers;

use App\Hotels;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    //
    public function index()
    {
        $hotels = Hotels::all();
        return view('Hotels', ['hotels' => $hotels]);
    }

}
