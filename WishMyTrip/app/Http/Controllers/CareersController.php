<?php

namespace App\Http\Controllers;

use App\Careers;
use Illuminate\Http\Request;

class CareersController extends Controller
{
    //
    public function index()
    {
        $careers = Careers::all();
        return view('Careers',['careers'=>$careers]);
    }
}
