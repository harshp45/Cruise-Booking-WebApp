<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accesories;

class accesoriesController extends Controller
{
    public function index(){
      $acc=Accesories::all();
      //  return view($acc);
      return view('ListAccesories', ['acc' => $acc]);
    }

    public function create(){
        return view('AddAccesories');
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'min:3',
            'category'=>'required',
            'description'=>'min:10',
            'price'=>'required',
            //'image' =>'required'
        ]);

      //return view('AddCruise');
      $student = new Accesories();
     $student->accessories_name = $request->name;
     $student->accessories_category = $request->category;
     $student->accessories_description = $request->description;
     $student->accessories_price = $request->price;
     $student->accessories_image = $request->image;
     
//       $student->email = $request->email;
//       $student->program = $request->program;
     $student->save();
//        Cruise::create($request->all());
      return redirect('listaccesories'); 
  }

  public function destroy($id)
  {
      $p = Accesories::find($id)->delete();
    
      return redirect('/listaccesories');
  }

  public function update($id)
  {
      $p=Accesories::find($id);
      return view('UpdateAccesories',['ps'=>$p]);
   //  return view('AddCruise');
  }
  public function updateData(Request $request,$id)
  {

    $this->validate($request, [
        'name' => 'min:3',
        'category'=>'required',
        'description'=>'min:10',
        'price'=>'required',
        //'image' =>'required'
    ]);
    
      $student = Accesories::find($id);
     
     $student->accessories_name = $request->name;
     $student->accessories_category = $request->category;
     $student->accessories_description = $request->description;
     $student->accessories_price = $request->price;
     $student->accessories_image = $request->image;
     
//       $student->email = $request->email;
//       $student->program = $request->program;
     $student->save();
//        Cruise::create($request->all());
      return redirect('/listaccesories'); 

    

  }


}
