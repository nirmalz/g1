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

Route::get('/', function () {
    return view('welcome');
});

Route::get('register', function(){
    return view('form');
});

Route::post('register', function(Request $request){

    pre($request->all());

    $validator = Validator::make($request->all(), array(

    ));


});



