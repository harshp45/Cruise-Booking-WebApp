<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\State;
use App\Country;

class stateController extends Controller
{
    public function index(){
        //return view('ListPlaces');
       // $places=State::all();
        $data= DB::select('select * from states join country where fk_country_id=country_id');
            //return $data;
        // $array = json_decode(json_encode($data), True);
        // //return $cruises;
         return view('ListState', ['states' => $data]);
    }

    public function create(){
        $places=Country::all();
        return view('AddState',['country'=>$places]);
    }

    public function store(Request $request){

        //return view('AddCruise');
        $student = new State();
       $student->state_name = $request->name;
       
       $data= DB::select("select * from country where country_name='". $request->country."'");
       $array = json_decode(json_encode($data), True);
       print_r($array);
       $student->fk_country_id = $array[0]['country_id'];
//       $student->email = $request->email;
//       $student->program = $request->program;
       $student->save();
//        Cruise::create($request->all());
        return redirect('liststate'); 
    }

    public function destroy($id)
    {
        $p = State::find($id)->delete();
      
        return redirect('/liststate');
    }

    public function update($id)
    {
        $p=State::find($id);
        $places=Country::all();
        return view('UpdateState',['ps'=>$p,'country'=>$places]);
     //  return view('AddCruise');
    }
    public function updateData(Request $request,$id)
    {
        
        $student = State::find($id);
        $student->state_name = $request->name;
        $data= DB::select("select * from country where country_name='". $request->country."'");
        $array = json_decode(json_encode($data), True);
        print_r($array);
        $student->fk_country_id = $array[0]['country_id'];
     //  $student->fk_country_id = $request->country;
//       $student->email = $request->email;
//       $student->program = $request->program;
       $student->save();
//        Cruise::create($request->all());
        return redirect('liststate'); 
    }
}
