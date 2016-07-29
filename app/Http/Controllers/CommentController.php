<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function postComment(Request $request, $article_id){


        $validator = Validator::make($request->all(), array(
            'comment'   => 'required|min:10'
        ));

        if($validator->fails()){
            return redirect('article/'.$article_id)
                ->withErrors($validator)
                ->withInput();
        }

        // comment, user_id, article_id
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['article_id'] = $article_id;

        Comment::create($data);

        return redirect('article/'.$article_id);

    }
}
