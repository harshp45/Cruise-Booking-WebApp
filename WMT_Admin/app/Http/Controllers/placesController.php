<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Places;
use App\City;

class placesController extends Controller
{
    public function index(){
        //return view('ListPlaces');
        $places=Places::all();
        $data= DB::select('select * from places join cities where fk_city_id=city_id');
        //return $cruises;
        return view('ListPlaces', ['places' => $data]);
    }

    public function create(){
        $city=City::all();
        return view('AddPlaces', ['city' => $city]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'description' =>'min:10',
            //'image'=>'required',
            'city'=>'required'
        ]);



        //return view('AddCruise');

        $student = new Places();
        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        request()->$file->move(public_path('images/places'), $filename);
        $student->image = $request->file('image')->getClientOriginalName();
       $student->place_location = $request->name;
       $student->place_description = $request->description;
       $student->place_image = $request->image;
       $student->fk_city_id = $request->city;
//       $student->email = $request->email;
//       $student->program = $request->program;
       $student->save();
//        Cruise::create($request->all());
        return redirect('listplaces'); 
    }

    public function destroy($id)
    {
        $p = Places::find($id)->delete();
      
        return redirect('/listplaces');
    }

    public function update($id)
    {
        $p=Places::find($id);
        $city=City::all();
        return view('UpdatePlaces',['ps'=>$p], ['city' => $city]);
     //  return view('AddCruise');
    }
    public function updateData(Request $request,$id)
    {
        
        
        $student = Places::find($id);
        $student->place_location = $request->name;
        $student->place_description = $request->description;
        $student->place_image = $request->image;
        $student->fk_city_id = $request->city;
 //       $student->email = $request->email;
 //       $student->program = $request->program;
        $student->save();
 //        Cruise::create($request->all());
         return redirect('listplaces'); 

    }
}
