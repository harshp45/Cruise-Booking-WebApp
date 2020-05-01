<?php
namespace App\Http\Controllers;
session_start();
use DB;
use Illuminate\Http\Request;
use App\Cruise;


class cruisesController extends Controller
{
    //
    public function index(){
        $cruises=Cruise::all();
        $array= DB::select("select * from cruise where fk_provider_id='".$_SESSION['provider_id']."'");
        $categories = Cruise::select('cruise_id','cruise_name', 'cruise_type','cruise_image','cruise_source','cruise_destination','cruise_no_of_nights','cruise_price','cruise_departure_date','cruise_departure_port','cruise_arrival_port','fk_provider_id')
                           ->where('fk_provider_id', '=', $_SESSION['provider_id'])
                           ->get();
        $data = json_decode(json_encode($array), True);
      //  print_r($data);
        //return $cruises;
        return view('ListCruises', ['cruises' => $categories]);
    }

    public function create(){
        return view('AddCruise');
    }

    public function store(Request $request){
        $this->validate($request, [
            'username' => 'min:3',
            'type'=>'required',
            'destination'=>'required',
            'source'=>'required',
            //'image' =>'required',
            'nights'=>'required',
            'price'=>'required',
            'departuredate'=>'required',
            'departureport'=>'required',
            'arrivalport'=>'required',
       //     'provider'=>'required'
        ]);

        //return view('AddCruise');
        $student = new Cruise();
       $student->cruise_name = $request->username;
       $student->cruise_type = $request->type;
       $student->cruise_destination = $request->destination;
       $student->cruise_source = $request->source;
       $student->cruise_image = $request->image;
       $student->cruise_no_of_nights = $request->nights;
       $student->cruise_price = $request->price;
       $student->cruise_departure_date = $request->departuredate;
       $student->cruise_departure_port= $request->departureport;
       $student->cruise_arrival_port= $request->arrivalport;
       $student->fk_provider_id = $_SESSION['provider_id'];
//       $student->email = $request->email;
//       $student->program = $request->program;
       $student->save();
//        Cruise::create($request->all());
        return redirect('listcruises'); 
    }

    public function destroy($id)
    {
        $p = Cruise::find($id)->delete();
      
        return redirect('/listcruises');
    }

    public function update($id)
    {
        $p=Cruise::find($id);
        return view('UpdateCruise',['ps'=>$p]);
     //  return view('AddCruise');
    }
    public function updateData(Request $request,$id)
    {
        $this->validate($request, [
            'username' => 'min:3',
            'type'=>'required',
            'destination'=>'required',
            'source'=>'required',
            //'image' =>'required',
            'nights'=>'required',
            'price'=>'required',
            'departuredate'=>'required',
            'departureport'=>'required',
            'arrivalport'=>'required',
        //    'provider'=>'required'
        ]);
        
        $student = Cruise::find($id);
        $student->cruise_name = $request->username;
        $student->cruise_type = $request->type;
        $student->cruise_destination = $request->destination;
        $student->cruise_source = $request->source;
        $student->cruise_image = $request->image;
        $student->cruise_no_of_nights = $request->nights;
        $student->cruise_price = $request->price;
        $student->cruise_departure_date = $request->departuredate;
        $student->cruise_departure_port= $request->departureport;
        $student->cruise_arrival_port= $request->arrivalport;
        $student->fk_provider_id = $_SESSION['provider_id'];

        $student->save();

         return redirect('listcruises'); 

    }
}
