<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\Student;

class StudentController extends Controller
{

    public function displayForm(){

        $students = Student::all();

        return view('form', array(
            'students'  => $students
        ));

    }

    public function createStudent(Request $request){

        $validator = Validator::make($request->all(), array(
            'first_name'  => 'required|alpha|min:2',
            'last_name'   => 'required|alpha|min:2',
            'email'       => 'required|email'
        ));

        if($validator->fails()){

            return redirect('register')
                ->withErrors($validator)
                ->withInput();

        }

        // when validation passed
        Student::create($request->all());
//        $student = new Student;
//        $student->create($request->all());


        //$student->first_name = $request->first_name;
        //$student->last_name = $request->last_name;
        //$student->email = $request->email;

        //$student->save();

        return redirect('register');



    }

}
