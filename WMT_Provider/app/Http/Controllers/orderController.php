<?php

namespace App\Http\Controllers;
session_start();
use Illuminate\Http\Request;
use DB;
class orderController extends Controller
{
    //
    public function index()
    {
        // print($_SESSION['provider_id']);
        $array= DB::select("select * from orders where fk_provider_id='".$_SESSION['provider_id']."'");
    //  //   $p=Cruise::find($id);
        return view('ListOrders',['ps'=>$array]);
    //  //  return view('AddCruise');
    }
}
