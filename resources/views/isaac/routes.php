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

use App\Http\Controllers\ToolssController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('registration', function () {
    return view('layouts.registration');
});

Route::get('print-orders', function () {
    return view('layouts.print orders');
});

Route::get('print-order-deliveries', function () {
    return view('layouts.print order deliveries');
});

Route::get('tool-distribution', function () {
    return view('layouts.tool distribution');
});

Route::get('tool-ordering', function () {
    return view('layouts.tool order');
});

Route::get('tool-pickup', function () {
    return view('layouts.tool pickup');
});


Route::get('home', function () {
    return view('layouts.master');
});

//Route::get('registered-user', function(){
    //$user = app\register::find(1);
    //print_r($user);
//});

//Route::post('/signup',[
  //  'uses' =>'UserController@postSignUp',
    //'as' => 'signup'
//]);

Route::resource('toolCRUD', 'ToolsCRUDController');

Route::resource('userCRUD', 'UserCRUDController');

Route::resource('serviceAreaCRUD','ServiceAreaCRUDController');

Route::auth();

Route::get('/home', 'HomeController@index');
