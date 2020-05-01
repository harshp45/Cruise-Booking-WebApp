<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Http\Request;


class SignUpController extends Controller
{
    public function index()
    {
        return view('SignUp');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required',
            'lname' =>'required',
            'email' =>'required',
            'password' => 'required',
            'confirmpassword' => 'required',
            'mobile' => 'required',
            'dob' => 'required',
            'address' => 'required'

        ]);

       $user= new users();
      $user->user_email_id=$request->email;
      $user->user_name=$request->fname;
      $user->user_pasword=$request->password;
      $user->user_dob=$request->dob;
      $user->user_gender=$request->gender;
      $user->user_mobile_no=$request->mobile;
      $user->user_address=$request->address;
      $user->save();
        return redirect('/Login');

    }
}
