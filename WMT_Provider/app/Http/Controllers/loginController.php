<?php
namespace App\Http\Controllers;
session_start();
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Provider;
use DB;

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
         $data= DB::select('select * from cruise_provider where provider_email_id=? and provider_password=? ',[$email,$password]);
    
     $array = json_decode(json_encode($data), True);
       //  print_r($array[0]['provider_name']);
         if( count($data))
         {
            // $request->session()->put('provider_name',$array[0]['provider_name']);
            // $request->session()->put('provider_email',$array[0]['provider_email_id']);
            $_SESSION["provider_name"]=$array[0]['provider_name'];
            $_SESSION["provider_email_id"]=$array[0]['provider_email_id'];
            $_SESSION["provider_id"]=$array[0]['provider_id'];
             return  redirect('/listcruises');
         }
         else
         {
              return redirect('/');    
         }
    }

    public function update()
    {
        $p=Provider::find($_SESSION['provider_id']);
      //  print_r($p);
        return view('UpdateProviderProfile',['ps'=>$p]);
     //  return view('AddCruise');
    }
    public function updateData(Request $request,$id)
    {
        
        $student = Provider::find($id);
        
        $student->provider_name = $request->name;
        $student->provider_password = $request->password;
        $student->provider_email_id = $request->email;
        $student->provider_address = $request->address;
        $student->fk_city_id = $request->city;     
        
        

        $student->save();

        $_SESSION["provider_name"]=$request->name;
        $_SESSION["provider_email_id"]=$request->email;
        
         return redirect('/listcruises'); 

    }


   
}