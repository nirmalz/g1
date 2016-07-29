<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function displaydash(){

        $level = Auth::user()->level;

        if($level == 'admin'){

            return $this->adminDash();

        }elseif($level == 'author'){

            return $this->authorDash();

        }else{

            return redirect('/');

        }


    }


    public function adminDash(){

        $authors = User::where('level', '=', 'author')->get();
        return view('adminDash', array(
            'authors'   => $authors
        ));
    }


    public function authorDash(){

        $articles = Auth::user()->articles;

        return view('authorDash', array(
            'articles'  => $articles
        ));

    }


    public function createAuthor(Request $request){

        $validator = Validator::make($request->all(), array(

            'name'      => 'required|min:2',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6|confirmed'

        ));


        if($validator->fails()){

            return redirect('dashboard')
                    ->withErrors($validator)
                    ->withInput();

        }


        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->passsword);
        $user->level = 'author';

        $user->save();

        return redirect('dashboard');

    }


}
