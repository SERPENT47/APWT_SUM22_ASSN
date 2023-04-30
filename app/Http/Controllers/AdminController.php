#Hello
<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard(){
        $students = Student::all();
        return view('admin.dashboard')->with('students',$students);
    }
}
