<?php


namespace App\Http\Controllers;
session_start();

use App\Mail\ForgotMail;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;

//use Illuminate\Contracts\Mail;

use App\Mail\sendEmailToCustomer;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Session\Session;

class sendEmailToCustomers extends Controller
{
    //
    public function sendemail(Request $request)
    {
        $email=$_SESSION["email"];
        $source=$request->input('source');
        $destination=$request->input('destination');
        $price=$request->input('price');
        $tax=$request->input('tax');
        $total=$request->input('total');
        $data = array(
            'source'=>$request->source,
            'destination'=>$request->destination,
            'price'=>$request->price,
            'tax'=>$request->tax,
            'insurance'=>$request->insurance,
            'total'=>$request->total
        );
        $orders = new Order();
        $orders->source=$request->source;
        $orders->destination=$request->destination;
        $orders->booking_date= Carbon::now();
        $orders->sailing_date= Carbon::now();
        $orders->fk_cruise_id=$request->idc;
        $orders->fk_provider_id = $request->idp;
        $orders->booking_status = "Confirm";
        $orders->Number_of_persons = 5;
        $orders->fk_user_email = $_SESSION["email"];
        $orders->save();

        Mail::to($email )->send(new sendEmailToCustomer($data));

        session_abort();
        return view('Thanks');




    }

    public function forget(Request $request)
    {
        $email=$request->input('email');


        $user = DB::select('select user_pasword from users where user_email_id=?',[$email]);

     //  print_r(strval($user));
       foreach ($user as $users)
       {
           $data = array(
               'password'=>$users->user_pasword,
               'user'=>'user'
           );

       }



        Mail::to($email )->send(new ForgotMail($data));
       return view('Login');

    }
}
