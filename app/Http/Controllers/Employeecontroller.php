<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class Employeecontroller extends Controller
{
      public function insert(request $req)
      {
        $validatedData=$req->validate([
            'email' =>'required|email',
            'name'=>'required',
        
           ]);
           $Employee = new Employee;
           $Employee->name = $req->input('name');
           $Employee->email = $req->input('email');
           $Employee->save();
           return redirect()->route('welcome');
      }
      public function index()
      {
         
       $data=Employee::all();
       
    
             
       return view('welcome',['data'=>$data]);

      }

}
