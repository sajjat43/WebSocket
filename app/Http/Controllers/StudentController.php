<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentIndex(){
        $student=Student::all();
        return view('index',compact('student'));
    }

    public function studentStore(Request $request){
        Student::create([
            'student_name' => $request->student_name,
            'student_id' => $request->student_id,
            'section'=> $request->section,
           
        ]);
        return redirect()->back();
    }

    
}
