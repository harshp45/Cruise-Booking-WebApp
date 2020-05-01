<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Hotels;
use App\City;

class hotelsController extends Controller
{
    public function index(){
        //return view('ListHotels');
        $hot=Hotels::all();
        $data= DB::select('select * from hotels join cities where fk_city_id=city_id');
        //return $cruises;
        return view('ListHotels', ['hot' => $data]);
    }

    public function create(){
        $city=City::all();
        return view('AddHotels',['city' => $city]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'min:3',
            //'image' =>'required',
            'ratings'=>'required',
            'city'=>'required'
        ]);

        //return view('AddCruise');
        $hotels = new Hotels();
        $hotels->hotel_name = $request->name;
        $hotels->hotel_image = $request->image;
        $hotels->hotel_place = $request->place;
        $hotels->hotel_description = $request->description;
        $hotels->hotel_rating = $request->ratings;
        $hotels->fk_city_id = $request->city;

//       $student->email = $request->email;
//       $student->program = $request->program;
        $hotels->save();
//        Cruise::create($request->all());
        return redirect('/listhotels');
    }

    public function destroy($id)
    {
        $p = Hotels::find($id)->delete();
        
        return redirect('/listhotels');
    }

    public function update($id)
    {
        $p=Hotels::find($id);
        $city=City::all();
        return view('UpdateHotels',['ps'=>$p], ['city' => $city]);
        //  return view('AddCruise');
    }
    public function updateData(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'min:3',
            //'image' =>'required',
            'ratings'=>'required',
            'city'=>'required'
        ]);

        $hotels = Hotels::find($id);
        $hotels->hotel_name = $request->name;
        $hotels->hotel_image = $request->image;
        $hotels->hotel_place = $request->place;
        $hotels->hotel_description = $request->description;
        $hotels->hotel_rating = $request->ratings;
        $hotels->fk_city_id = $request->city;

//       $student->email = $request->email;
//       $student->program = $request->program;
        $hotels->save();
//        Cruise::create($request->all());
        return redirect('/listhotels');

    }
}
