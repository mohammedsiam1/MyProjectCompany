<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});






    Route::get('/',             ['as'=>'AlllinkeNeme',      'uses' =>'App\Http\Controllers\mycontroller\LinkController@index']);
    Route::get('AllDetilLink',  ['as'=>'AllDetil.Links',    'uses' => 'App\Http\Controllers\mycontroller\LinkController@showAllDetilLinks']);
    Route::get('/addEmploy',    ['as'=>'add.Employ',        'uses' => 'App\Http\Controllers\mycontroller\LinkController@crite']);
    Route::get('showEmploy',    ['as'=>'show.Employ',       'uses' => 'App\Http\Controllers\mycontroller\LinkController@showemply']);
    Route::post('/insertEmploy',['as'=>'insertEmploy',       'uses' => 'App\Http\Controllers\mycontroller\LinkController@insert']);
    Route::get('/linkdetiles',  ['as'=>'linkdetiles',       'uses' => 'App\Http\Controllers\mycontroller\LinkController@insertajax']);
    Route::get('/showlinks',    ['as'=>'showlinks',         'uses' => 'App\Http\Controllers\mycontroller\LinkController@show']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
