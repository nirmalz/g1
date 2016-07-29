<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{

    public function viewHome(){

        $articles = Article::all();

        return view('welcome', array(
            'articles'  => $articles
        ));

    }

}
