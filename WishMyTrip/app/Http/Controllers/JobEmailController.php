<?php

namespace App\Http\Controllers;
use App\Careers;
use App\Mail\SendJobMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class JobEmailController extends Controller
{
    //
    public function index(Request $request)
    {
        $jobname = $request->jobname;
        $jobdescription = $request->jobdescription;
        return view('jobapplication',['jobname'=>$jobname,'jobdescription'=>$jobdescription]);
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'fullname'     =>  'required',
            'email'  =>  'required|email',
            'jobname' =>  'required'
        ]);

        $data = array(
            'fullname' =>  $request->fullname,
            'email'   =>   $request->email,
            'jobname' => $request->jobname,
            'jobdescription' =>$request->jobdescription
        );

        Mail::to($data['email'])->send(new SendJobMail($data));
        $careers = Careers::all();
        return view('Careers',['careers'=>$careers]);
    }
}
