<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs;


class jobsController extends Controller
{
    public function index(){
        //return view('ListJobs');
        $jobs=Jobs::all();
        //return $cruises;
        return view('ListJobs', ['jobs' => $jobs]);
    }

    public function create(){
        return view('AddJobs');
    }

    public function store(Request $request){

        $this->validate($request, [
            'name'=>'min:3',
            'type'=>'required',
        ]);

        //return view('AddCruise');
        $student = new Jobs();
       $student->job_name = $request->name;
       $student->job_type = $request->type;
       $student->fk_user_id = $request->user;
      
//       $student->email = $request->email;
//       $student->program = $request->program;
       $student->save();
//        Cruise::create($request->all());
        return redirect('/listjobs'); 
    }

    public function destroy($id)
    {
        $p = Jobs::find($id)->delete();
      
        return redirect('/listjobs');
    }

    public function update($id)
    {
        $p=Jobs::find($id);
        return view('UpdateJobs',['ps'=>$p]);
     //  return view('AddCruise');
    }
    public function updateData(Request $request,$id)
    {
        $this->validate($request, [
            'name'=>'min:3',
            'type'=>'required',
        ]);
        $student = Jobs::find($id);
        $student->job_name = $request->name;
        $student->job_type = $request->type;
       

        $student->save();

         return redirect('listjobs'); 

    }
}
