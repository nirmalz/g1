<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StudentController extends Controller
{

    public function createStudent(Request $request){

        $validator = Validator::make($request->all(), array(
            'first_name'  => 'required|alpha|min:2',
            'last_name'   => 'required|alpha|min:2',
            'email'       => 'required|email'
        ));

        if($validator->fails()){

            return redirect('register')
                ->withErrors($validator);

        }

    }

}
