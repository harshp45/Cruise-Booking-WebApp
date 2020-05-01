<?php

namespace App\Http\Controllers;
session_start();
use DB;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('Login');
    }  
    
    public function authenticate(Request $request)
    {
        // $st=new Provider();

        // $st->email=$request->email;
        // $st->password=$request->password;
        
        // if (Auth::attempt(['provider_email_id' => $st->email, 'provider_password' => $st->password]))
        // {
        //     // session()->regenerate();
        //     // Session::put('email',$email);
        //     session(['email' => $email]);
        //     return redirect()->intended('listcruises');
        // }else {
            
        //     return redirect('/');
        // }
        $email=$request->input('email');
         $password=$request->input('password');
         $data= DB::select('select * from users where user_email_id=? and user_pasword=? ',[$email,$password]);
    
     $array = json_decode(json_encode($data), True);
       //  print_r($array[0]['provider_name']);
         if( count($data))
         {
            // $request->session()->put('provider_name',$array[0]['provider_name']);
            // $request->session()->put('provider_email',$array[0]['provider_email_id']);
            $_SESSION["user_name"]=$array[0]['user_name'];
            $_SESSION["user_email_id"]=$array[0]['user_email_id'];
            $_SESSION["user_id"]=$array[0]['user_id'];
             return  redirect('/listusers');
         }
         else
         {
              return redirect('/');    
         }
    }
    
}
