<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{

    public function createArticle(Request $request){

        $validator = Validator::make($request->all(), array(

            'title'     => 'required|min:10',
            'content'   => 'required|min:50'

        ));


        if($validator->fails()){
             return redirect('dashboard')
                 ->withErrors($validator)
                 ->withInput();
        }


    }


}
