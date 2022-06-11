<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class LoginController extends Controller
{
   function login(Request $req)
   {
    
    $student = Student::where('email','=',$req->email)->first();
    if($student.count() > 0)
    {
        if($studet->password == $req->password && $studet->type == 'User')
        {
            $req->session()->put('useremail', $req->email);
            return redirect('/dashboard/student');
        }
        else{
            return redirect('/dashboard/student');
        }
    }
    else{
        return redirect('/login'); 
    }
   }
}
