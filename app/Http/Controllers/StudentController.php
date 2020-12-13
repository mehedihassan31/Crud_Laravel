<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function home(){

        $student=Student::latest()->get();
        return view('home',compact('student'));
    }  
      public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'class'=>'required',
            'roll'=>'required',
        ],
        [
            'name.required'=>'input your name',
            'class'=>'input your class',
            'roll'=>'input your roll',
        ]
    );

    Student::insert( [

        'name'=>$request->name,
        'class'=>$request->class,
        'roll'=>$request->roll,

    ]);
    return redirect()->back()->with('success','successfully data add');
    }


    public function edit($id){
        $student=Student::findOrFail($id);
        return view('edit',compact('student'));

    }

    public function update(Request $request, $id){

        $student=Student::findOrFail($id)->update( [

            'name'=>$request->name,
            'class'=>$request->class,
            'roll'=>$request->roll,
    
        ]);

        return redirect()->to('/home')->with('success','successfully data update');

    }

    public function delete($id){
        $student=Student::findOrFail($id)->delete();
        return redirect()->back()->with('delete','successfully data deleted');
    }



}
