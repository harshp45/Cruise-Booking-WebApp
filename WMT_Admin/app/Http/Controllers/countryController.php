<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class countryController extends Controller
{
    public function index(){
        //return view('ListPlaces');
        $places=Country::all();
        //return $cruises;
        return view('ListCountry', ['country' => $places]);
    }

    public function create(){
        return view('AddCountry');
    }

    public function store(Request $request){

        //return view('AddCruise');
        $student = new Country();
       $student->country_name= $request->name;
       
//       $student->email = $request->email;
//       $student->program = $request->program;
       $student->save();
//        Cruise::create($request->all());
        return redirect('listcountry'); 
    }

    public function destroy($id)
    {
        $p = Country::find($id)->delete();
      
        return redirect('/listcountry');
    }

    public function update($id)
    {
        $p=Country::find($id);
        return view('UpdateCountry',['ps'=>$p]);
     //  return view('AddCruise');
    }
    public function updateData(Request $request,$id)
    {
        
        $student = Country::find($id);
        $student->country_name = $request->name;
        
 //       $student->email = $request->email;
 //       $student->program = $request->program;
        $student->save();
 //        Cruise::create($request->all());
         return redirect('listcountry'); 

    }
}
