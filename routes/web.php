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


Route::view('/','home');
Route::get('employees', 'App\Http\Controllers\EmployeesController@index');
Route::get('employees/create','App\Http\Controllers\EmployeesController@create');
Route::post('employees','App\Http\Controllers\EmployeesController@store');
Route::get('employees/{employee}','App\Http\Controllers\EmployeesController@show');
Route::get('employees/{employee}/edit','App\Http\Controllers\EmployeesController@edit');
Route::patch('employees/{employee}','App\Http\Controllers\EmployeesController@update');
Route::delete('employees/{employee}','App\Http\Controllers\EmployeesController@destroy');

/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('contact',function (){
    return view('contact');
});

Route::get('about',function (){
    return view('about');
});
*/
