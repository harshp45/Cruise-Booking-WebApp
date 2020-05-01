<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
class sendEmailController extends Controller
{
    //
    public function index()
    {

    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'comments' =>  'required'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'comments'   =>   $request->comments
        );

        Mail::to('kevalvirat@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }
}
