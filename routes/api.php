<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();

});
//Customer
Route::get('customer','CustomerController@index');
Route::get('/customer/{id}','CustomerController@view');
Route::post('customer','CustomerController@create');
Route::put('/customer/{id}','CustomerController@update');
Route::delete('/customer/{id}','CustomerController@delete');

//Category
Route::get('category','CategoryController@index');
Route::get('/category/{id}','CategoryController@view');
Route::post('category','CategoryController@create');
Route::put('/category/{id}','CategoryController@update');
Route::delete('/category/{id}','CategoryController@delete');

//Product
Route::get('product','ProductController@index');
Route::get('/product/{id}','ProductController@view');
Route::post('product','ProductController@create');
Route::put('/product/{id}','ProductController@update');
Route::delete('/product/{id}','ProductController@delete');

//Order
Route::get('order','OrderController@index');
Route::get('/order/{id}','OrderController@view');
Route::post('order','OrderController@create');
Route::put('/order/{id}','OrderController@update');
Route::delete('/order/{id}','OrderController@delete');

//Cart
Route::get('cart','CartController@index');
Route::get('/cart/{id}','CartController@view');
Route::post('cart','CartController@create');
Route::put('/cart/{id}','CartController@update');
Route::delete('/cart/{id}','CartController@delete');

//Payment
Route::get('payment','PaymentController@index');
Route::get('/payment/{id}','PaymentController@view');
Route::post('payment','PaymentController@create');
Route::put('/payment/{id}','PaymentController@update');
Route::delete('/payment/{id}','PaymentController@delete');

//Invoice
Route::get('invoice','InvoiceController@index');
Route::get('/invoice/{id}','InvoiceController@view');
Route::post('invoice','InvoiceController@create');
Route::put('/invoice/{id}','InvoiceController@update');
Route::delete('/invoice/{id}','InvoiceController@delete');