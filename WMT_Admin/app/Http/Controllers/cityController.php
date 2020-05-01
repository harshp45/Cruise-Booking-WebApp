<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\City;
use App\State;

class cityController extends Controller
{
    public function index(){
        //return view('ListPlaces');
       // $places=State::all();
        $data= DB::select('select * from cities join states where fk_state_id=state_id');
      //  $array = json_decode(json_encode($data), True);
            //return $data;
        // $array = json_decode(json_encode($data), True);
        // //return $cruises;
         return view('ListCity', ['state' => $data]);
    }

    public function create(){
        $places=State::all();
        return view('AddCity',['state'=>$places]);
    }

    public function store(Request $request){

        //return view('AddCruise');
        $student = new City();
       $student->city_name = $request->name;
       
       $data= DB::select("select * from states where state_name='". $request->state."'");
       $array = json_decode(json_encode($data), True);
       
       $student->fk_state_id = $array[0]['state_id'];
       
//       $student->email = $request->email;
//       $student->program = $request->program;
      $student->save();
//        Cruise::create($request->all());
        return redirect('listcity'); 
    }

    public function destroy($id)
    {
        $p = City::find($id)->delete();
      
        return redirect('/listcity');
    }

    public function update($id)
    {
        $p=City::find($id);
        $places=State::all();
        return view('Update',['ps'=>$p,'state'=>$places]);
     //  return view('AddCruise');
    }
    public function updateData(Request $request,$id)
    {
        
        $student = City::find($id);
        $student->city_name = $request->name;
       
        $data= DB::select("select * from states where state_name='". $request->state."'");
        $array = json_decode(json_encode($data), True);
        
        $student->fk_state_id = $array[0]['state_id'];
        
 //       $student->email = $request->email;
 //       $student->program = $request->program;
       $student->save();
 //        Cruise::create($request->all());
         return redirect('listcity');  
    }
}
