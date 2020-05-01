<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Providers;
use App\City;

class providersController extends Controller
{
    public function index(){
       // return view('ListProviders');
       $data= DB::select('select * from cruise_provider join cities where fk_city_id=city_id');
       $providers=Providers::all();
        //return $cruises;
        return view('ListProviders', ['providers' => $data]);
    }

    public function create(){
        $city=City::all();
        return view('AddProviders', ['city' => $city]);
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'min:3',
            'password' =>'min:8',
            'email'=>'required',
            'address'=>'required',
            'city'=>'required'
        ]);

        //return view('AddCruise');
        $student = new Providers();
        $student->provider_name = $request->name;
        $student->provider_password = $request->password;
        $student->provider_email_id = $request->email;
        $student->provider_address = $request->address;
        $student->fk_city_id = $request->city;
      
//       $student->email = $request->email;
//       $student->program = $request->program;
       $student->save();
//        Cruise::create($request->all());
        return redirect('/listproviders'); 
    }

    public function destroy($id)
    {
        $p = Providers::find($id)->delete();
        
        return redirect('/listproviders');
    }

    public function update($id)
    {
        $p=Providers::find($id);
        $city=City::all();
      //  print_r($p);
        return view('UpdateProvider',['ps'=>$p], ['city' => $city]);
     //  return view('AddCruise');
    }
    public function updateData(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'min:3',
            'password' =>'min:8',
            'email'=>'required',
            'address'=>'required',
            'city'=>'required'
        ]);
        
        $student = Providers::find($id);
        
        $student->provider_name = $request->name;
        $student->provider_password = $request->password;
        $student->provider_email_id = $request->email;
        $student->provider_address = $request->address;
        $student->fk_city_id = $request->city;        

        $student->save();

         return redirect('listproviders'); 

    }
}
