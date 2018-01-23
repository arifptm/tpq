<?php

namespace App\Http\Controllers\check;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Student;

class StudentController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function nonActive(){    	
    	return view('check.i-nonactive-student', []);
    }

    public function blockNonActive(){
		$students = Student::nonActive()->headed()->get();
    	return view('check.b-nonactive-student', [ 'students' => $students ]);    		
    }

    public function tuitionYet(){
    	return view('check.i-tuitionyet-student');
    }
}
