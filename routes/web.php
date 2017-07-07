<?php

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
//
Route::get('/', 'HomeController@index');
Route::get('users', 'UserController@index');
Route::get('cal-{num1}-{num2}', 'HomeController@cal');
Route::get('users/show/{id}', 'UserController@show');
Route::auth();
Auth::routes();
Route::get('/home', 'HomeController@home');






//Route::get($n1,$n2)
//Route::get('/a', function () {
//    $arr = [1,2,3];
//    dd($arr);
//});

//
//Route::get('users', function () {
//   dd( \App\User:: all());
//});


//Route::get('about', function () {
//    return "Hello From about page!";
//});
//Route::post('', function () {
//    return "Hello From contact page!";


////Route::get('cal-{n1}-{n2}', function ($n1,$n2) {
//    return $n1+$n2;
//});
//});

