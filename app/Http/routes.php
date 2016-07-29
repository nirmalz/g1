<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

function pre($data){
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

use Illuminate\Http\Request;

Route::get('/', 'SiteController@viewHome');

//Route::get('register', 'StudentController@displayForm');
//Route::post('register', 'StudentController@createStudent');
Route::auth();
Route::get('/home', 'HomeController@index');

Route::get('dashboard', 'UserController@displaydash');

// route to create author
Route::post('create-author', 'UserController@createAuthor');


//
Route::post('create-article', 'ArticleController@createArticle');

Route::get('article/{article_id}', 'ArticleController@viewArticle');

Route::post('post-comment/{article_id}', 'CommentController@postComment');