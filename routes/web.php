<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('users');
});

Route::get('/viewpdf2/{userid}', function () {
	$pdf = PDF::loadView('viewpdf');
	return $pdf->download('viewpdf.pdf');
	//return view('viewpdf');
});

/*Route::get('/createUser', function () {
    return view('createuser');
});*/

Route::get('/getUsers','UserController@getUsers');
Route::get('/createUser','UserController@createUser');
Route::get('/editUser/{userid}/','UserController@editUser');
Route::post('/updateUsers','UserController@updateUsers');
Route::get('/deleteUser/{userid}/','UserController@deleteUser');
Route::get('/viewpdf/{userid}/','UserController@viewpdf');
Route::post('/storeUser','UserController@storeUser');