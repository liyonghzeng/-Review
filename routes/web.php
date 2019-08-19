<?php

use Illuminate\Auth\Middleware\CheckToken;
use App\Http\Middleware\ConToken;

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

//Route::get('/', function () {
//
////    echo $cc;
//    return view('welcome');
//});


//Route::get('/home', 'HomeController@index')->name('home');

//展示页面
Route::get('/', 'HomeListController@index')->middleware(ConToken::class);





