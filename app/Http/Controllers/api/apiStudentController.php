<?php

namespace App\Http\Controllers\api;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class apiStudentController extends Controller
{
    public function studentStore(Request $request){

        
        $student = Student::create([
            
            'student_name' => $request->student_name,
            'student_email' => $request->student_email,
            'student_address'=> $request->student_address,
            
        ]);
        return $this->responseWithSuccess($student, 'Student Created successfully');
        }
        
        public function studentShow(){
            
            $student=Student::all();
            return $this->responseWithSuccess($student,'student list loaded');
        }

        public function studentDelete($id){
            $student = Student::find($id);
        $student->delete($id);
            return $this->responseWithSuccess($student,'student delete successfully');

        }
}
