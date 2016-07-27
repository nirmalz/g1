<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function displaydash(){

        $level = Auth::user()->level;

        if($level == 'admin'){

            return $this->adminDash();

        }elseif($level == 'author'){

            return $this->authorDash();

        }else{

        }


    }


    public function adminDash(){

        return view('adminDash');
    }


    public function authorDash(){

        return view('authorDash');

    }


}
