<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function details($id){
        $name="Student $id";
        $dob ="4456";
        return view('student.details')
        ->with('n',$name)
        ->with('id',$id);
    }
    public function list(){
        $students = Student::all(); //select * from students
        //$students = Student::where('id','>=',2)->first();
        //return $students;
        
        
        return view('student.list')->with('students',$students);

    }
    function create(){
        return view('student.create');
    }
    function createSubmit(Request $req){
        $this->validate($req,
            [
                "name"=>"required|min:3",
                "email"=>"required|",
                "password"=>"required|min:8",
                "conf_password"=>"required|min:8|same:password",
                "type"=>"required"
            ],
        
            [
                "name.required"=>"Please provide your name",
                "name.max"=>"Name should not exceed 10 characters",

                
            ]);
            $st = new Student();
            $st->name = $req->name;
            $st->email =$req->email;
            $st->password = $req->password;
            $st->TYPE = $req->type;
            $st->save();
        return "Form submitted";
        
    }
}