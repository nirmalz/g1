<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
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


        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        Article::create($data);

        return redirect('dashboard');

    }

    public function viewArticle($article_id){

        $article    = Article::find($article_id);
        $comments   = $article->comments;

        return view('article', array(
            'article'   => $article,
            'comments'  => $comments
        ));

    }


}
