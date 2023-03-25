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
define('PAGINATION_COUNT',1000);

Route::group(['namespace'=>'App\Http\Controllers\Admin', 'middleware'=>'auth:admin'],function (){

    Route::get('/','DashboardController@index')->name('admin.dashboard');
    Route::get('logout','DashboardController@logout')->name('admin.logout');

    
    ##################### asnaf ############################
    Route::group(['prefix'=>'asnaf'],function (){
        Route::get('/','AsnafController@index')->name('admin.asnaf');
        Route::get('create','AsnafController@create')->name('admin.asnaf.create');
        Route::post('store','AsnafController@store')->name('admin.asnaf.store');

        Route::get('edit/{id}','AsnafController@edit')->name('admin.asnaf.edit');
        Route::post('update/{id}','AsnafController@update')->name('admin.asnaf.update');

        Route::get('delete/{id}','AsnafController@destroy') -> name('admin.asnaf.delete');
    });
    ##################### End asnaf ########################

    ##################### Stock ############################
    Route::group(['prefix'=>'stock'],function (){
        Route::get('/','CarController@index')->name('admin.car');
        Route::get('/stock','CarController@indexStock')->name('admin.stock');
        Route::get('/sender','CarController@indexSender')->name('admin.sender');
        Route::get('/recever','CarController@indexRecever')->name('admin.recever');
        Route::get('/fix','CarController@indexFix')->name('admin.fix');
        Route::get('/done','CarController@indexDone')->name('admin.done');
        Route::get('/cancel','CarController@indexCancel')->name('admin.cancel');

        Route::get('create','CarController@create')->name('admin.stock.create');
        Route::post('store','CarController@store')->name('admin.stock.store');

        Route::get('edit/{id}','CarController@edit')->name('admin.stock.edit');
        Route::post('update/{id}','CarController@update')->name('admin.stock.update');

        Route::get('delete/{id}','CarController@destroy') -> name('admin.stock.delete');
    });
    ##################### End Stock ########################

    ##################### Admin ##############################
    Route::group(['prefix'=>'admin'],function (){
        Route::get('/','AdminController@index')->name('admin.admin');
        Route::get('create','AdminController@create')->name('admin.admin.create');
        Route::post('store','AdminController@store')->name('admin.admin.store');

        Route::get('edit/{id}','AdminController@edit')->name('admin.admin.edit');
        Route::post('update/{id}','AdminController@update')->name('admin.admin.update');

        Route::get('delete/{id}','AdminController@destroy') -> name('admin.admin.delete');
    });
    ##################### End Admin ##########################

    ##################### Role ###############################
    Route::group(['prefix'=>'role'],function (){
        Route::get('/','RoleController@index')->name('admin.role');
        Route::get('create','RoleController@create')->name('admin.role.create');
        Route::post('store','RoleController@store')->name('admin.role.store');

        Route::get('edit/{id}','RoleController@edit')->name('admin.role.edit');
        Route::post('update/{id}','RoleController@update')->name('admin.role.update');

        Route::get('delete/{id}','RoleController@destroy') -> name('admin.role.delete');
    });
    ##################### End Role ###########################

});


Route::group(['namespace'=>'App\Http\Controllers\Admin', 'middleware'=>'guest:admin'],function (){

    Route::get('login', 'LoginController@getLogin')->name('admin.getlogin');
    Route::post('login', 'LoginController@login')->name('admin.login');
});

//Auth::routes();

