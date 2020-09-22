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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
	return view('test');
});

Route::get('info',function(Request $req){  //
	$data =[
		[
			"name" => $req->all()["name"],
			"surname" =>$req->all()["surname"],
			"location" => $req->all()["location"],
			"bio" =>$req->all()["bio"],
			"birth" => $req->all()["birth"]
			

		]
	];
	return view('info',["newdata"=>$data]);
});

