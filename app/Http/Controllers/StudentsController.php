<?php

namespace App\Http\Controllers;
use App\Student;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()     
    {
        return view('tcheruiyot.students');
    }
    public function storeStudent(Request $request)
    {
       $this->validate($request, [
           'student_name' => 'required', 
           'address' => 'required', 
           'date_of_birth' => 'required', 
       ]);
       $student = new Student();
       $student->full_name = $request->student_name;
       $student->date_of_birth = $request->date_of_birth;
       $student->address = $request->address;
       $student->save();

       return redirect()->route('home');
    }
}
