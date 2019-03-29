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

Route::get('/','CarController@all');




Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/carDetail','CarController@index')->name('carDetail');
/*购物车*/
Route::get('/shoppingCar','ShoppingCarController@index')->name('shoppingCar');
Route::delete('/shoppingCar','ShoppingCarController@delete')->name('shoppingCar');
Route::post('/shoppingCar','ShoppingCarController@put')->name('shoppingCar');

/*用户的个人信息*/
Route::get('/user/information','UsersController@index')->name('user.information');//展示用户信息
Route::post('/user/information','UsersController@amend')->name('user.information');//修改用户信息
Route::get('/user/amend',function(){
	return view('user.amend',['success'=>'1']);
})->name('user.amend');
