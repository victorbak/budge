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



Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/home', 'HomeController@index')->name('home');
});



Route::get('/config', 'ConfigController@index')->name('config');

Route::post('/config/update', 'UserController@update')->name('config.update');

Route::get('/paid', 'PaidController@index')->name('paid');
Route::post('/paid/update', 'PaidController@update')->name('paid.update');

Route::get('/spent', 'SpentController@index')->name('spent');
Route::post('/spent/update', 'SpentController@update')->name('spent.update');

Route::get('/addbills', 'BillsController@index')->name('bills');
Route::post('/addbills/insert', 'BillsController@insert')->name('bills.insert');

Route::get('bills', 'PayController@index')->name('pay');

Route::get('/bills/pay/{id}', ['uses' =>'PayController@bills'])->name('pay.bills');





