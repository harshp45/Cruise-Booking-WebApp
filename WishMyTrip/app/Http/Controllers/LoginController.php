<?php

namespace App\Http\Controllers;
session_start();
use App\User;
use App\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Hash;


class LoginController extends Controller
{
    //
    public function index()
    {
        return view('Login');
    }
    public function login(Request $request)
    {


        $data=$request->input();

         $email=$request->input('email');

         $password=$request->input('password');
         $data= DB::select('select user_id from users where user_email_id=? and user_pasword=? ',[$email,$password]);
         if( count($data))
         {
//             $request->session()->put('user',$email);
             $_SESSION["email"] = $email;
        //   print_r(  $request->session()->get('user'));
           //  return view('/index')->with('data', $request->session()->get('user'));
             return redirect("index");
         }
         else
         {
             return back()->with ('error','Wrong Login Details');

         }
    }
}
