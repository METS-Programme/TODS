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
Route::auth();

Route::get('/', 'HomeController@index');

//Route::get('/', function () {
//    return view('/layouts/home');
//});

/*Route::get('registration', function () {
    return view('layouts.registration');
});*/

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

Route::get('reports', function () {
    return view('layouts.reports.report');
});

//Route::get( "tool-registration", 'ToolsRegistrationController@tool-registration');
//Route::post("store", 'ToolsregistrationController@store');

//Route::get('home', function () {
//    return view('layouts.home');
//});

/*Route::get('registered-user', function(){
    $user = app\register::find(1);
    print_r($user);
});*/

//Real Routes now

//Route::get('test', 'TestController@index');

Route::get('testing', 'testing123@test');

Route::get('tool-registration', 'ToolsregController@registorTool');

Route::get('tool-pickup', 'ToolsregController@pickupTool');
Route::get('people/{user_id}', 'UserRegController@userDetails');

//User Routes
Route::get('people', 'UserRegController@showUsers');
Route::get('people/create', 'UserRegController@createUser');
Route::get('people/{user_id}', 'UserRegController@userDetails');
Route::post('people', 'UserRegController@store');

//Import Export Allocations from/to Excell into DB
Route::get('allocations', 'AllocationsController@index');
//Route::get('allocations', 'AllocationsController@importExport');
Route::get('allocations/{type}', 'AllocationsController@downloadExcel');
Route::post('allocations', 'AllocationsController@importExcel');
//Route::get('available-tools', 'AvailableToolsController@index');
Route::get('/', 'AvailableToolsController@homeBlock');

//Route::get('delivery/{printorder_id}', 'PrintOrderCRUDController@showdeliverynote');


//IP Routes
/*Route::get('ips', 'ImplementingPartnerController@showIps');
Route::get('ips/create', 'ImplementingPartnerController@createIp');
Route::get('ips/{user_id}', 'ImplementingPartnerController@ipDetails');
Route::post('ips', 'ImplementingPartnerController@store');
Route::get('ips/{id}/edit', 'ImplementingPartnerController@edit');*/
Route::resource('ips', 'ImplementingPartnerController');
Route::resource('tools-picked', 'toolsController');
Route::resource('tools', 'ToolsCRUDController');
Route::resource('deliveryCRUD', 'DeliveryCRUDController');
Route::resource('printorderCRUD', 'PrintOrderCRUDController');
Route::resource('ipdashboard', 'IpDashboardController');
Route::resource('facility', 'facility');


//Route::resource('allocations', 'AllocationsController');







