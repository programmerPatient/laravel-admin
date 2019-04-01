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
Route::post('/home','CarController@select')->name('home');
/*购物车*/
Route::get('/shoppingCar','ShoppingCarController@index')->name('shoppingCar');
Route::get('/shoppingCar/delete','ShoppingCarController@delete')->name('shoppingCar.delete');
Route::post('/shoppingCar','ShoppingCarController@put')->name('shoppingCar');

/*用户的个人信息*/
Route::get('/user/information','UsersController@index')->name('user.information');//展示用户信息
Route::post('/user/information','UsersController@amend')->name('user.information');//修改用户信息
Route::get('/user/amend',function(){
	return view('user.amend',['success'=>'1']);
})->name('user.amend');



/*用户的收货地址接口*/
Route::get('/user/location','UsersLocationController@index')->name('user.location');//获取用户已经添加过的收货地址
Route::post('/user/addlocation','UsersLocationController@put')->name('user.addlocation');//增加新的收货地址
Route::delete('/user/location','UsersLocationController@delete')->name('user.location');//删除已有的收货地址
Route::post('/user/location/amend','UsersLocationController@amend')->name('user.location.amend');//修改已有的收货地址


/*提交订单*/
Route::get('/user/add/indent','IndentController@add')->name('user.add.indent');
Route::get('/user/indent','IndentController@index')->name('user.indent');