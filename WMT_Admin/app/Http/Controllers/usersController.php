<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class usersController extends Controller
{
    public function index(){
       // return view('ListUsers');
       $users=Users::all();
        //return $cruises;
        return view('ListUsers', ['users' => $users]);
    }

    public function create(){
        return view('AddUsers');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'fname' =>'min:3',
            'password' =>'min:8',
            'dob'=>'required',
            'gender'=>'required',
            'mobile'=>'required',
            'address'=>'required'
        ]);

       $user= new users();
      $user->user_email_id=$request->email;
      $user->user_name=$request->fname;
      $user->user_pasword=$request->password;
      $user->user_dob=$request->dob;
      $user->user_gender=$request->gender;
      $user->user_mobile_no=$request->mobile;
      $user->user_address=$request->address;
      $user->save();
        return redirect('/listusers');

    }

    public function destroy($id)
    {
        $p = Users::find($id)->delete();
      
        return redirect('/listusers');
    }

    public function update($id)
    {
        $p=Users::find($id);
        return view('UpdateUsers',['ps'=>$p]);
     //  return view('AddCruise');
    }
    public function updateData(Request $request,$id)
    {
        $this->validate($request, [
            'email' => 'required',
            'fname' =>'min:3',
            'password' =>'min:8',
            'dob'=>'required',
            'gender'=>'required',
            'mobile'=>'required',
            'address'=>'required'
        ]);
        
        $user = Users::find($id);
        $user->user_email_id=$request->email;
      $user->user_name=$request->fname;
      $user->user_pasword=$request->password;
      $user->user_dob=$request->dob;
      $user->user_gender=$request->gender;
      $user->user_mobile_no=$request->mobile;
      $user->user_address=$request->address;
      $user->save();

         return redirect('listusers'); 

    }
}
