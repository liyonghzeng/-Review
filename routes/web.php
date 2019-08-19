<?php


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

//服务端
Route::get('/', 'HomeListController@index')->middleware(ConToken::class);
//用户端
Route::get('client', 'HomeListController@client');




