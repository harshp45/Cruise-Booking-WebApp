<?php

namespace App\Http\Controllers;

use App\contactus;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('ContactUs');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'min:3',
            'email' =>'required',
            'comments' =>'required|'

        ]);

        contactus::create($request->all());
        return redirect('ContactUs');
    }


}
