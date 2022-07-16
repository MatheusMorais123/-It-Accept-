<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\CompanyController;
use App\EmployeeController;
use App\OfferController;
use App\TransportController;
use App\LanceController;
use App\WinnerController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/login', 'AuthController@login');

Route::get('/company', 'CompanyController@index');

Route::get('company/{id}', 'CompanyController@show');

Route::post('/company/store', 'CompanyController@store');

Route::delete('/company/{id}', 'CompanyController@delete');


Route::post('/employee/store', 'EmployeeController@store');

Route::get('/employee', 'EmployeeController@index');

Route::get('employee/{id}', 'EmployeeController@show');

Route::post('/offer/store', 'OfferController@store');


Route::get('/offer', 'OfferController@index');

Route::get('offer/{id}', 'OfferController@show');

Route::post('/transport', 'TransportController@store');

Route::get('/transport', 'TransportController@index');

Route::post('/lance', 'LanceController@store');

Route::get('/lance', 'LanceController@index');

Route::post('/winner', 'WinnerController@store');

Route::get('/winner', 'WinnerController@index');
