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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>'dashboard','middleware'=>'auth'],function(){
    
    Route::get('/',['as'=>'dashboard','uses'=>'DashboardController@index']);    
    
    Route::group(['prefix'=>'participant'],function(){
        Route::get('/',['as'=>'participant','uses'=>'ParticipantController@index']);
        Route::post('/',['as'=>'participant','uses'=>'ParticipantController@store']);
    });

    Route::group(['prefix'=>'festival'],function(){
        Route::get('/',['as'=>'festival','uses'=>'ParticipantController@addList']);
        Route::post('/',['as'=>'festival','uses'=>'ParticipantController@addList']);
    });

    Route::group(['prefix'=>'stand'],function(){
        Route::get('/',['as'=>'stand','uses'=>'StandController@index']);
        Route::post('/',['as'=>'stand','uses'=>'StandController@store']);
        Route::post('/{id}',['as'=>'addpoint','uses'=>'StandController@addPoint']);
    });

    Route::group(['prefix'=>'merchandise'],function(){
        Route::get('/',['as'=>'merchandise','uses'=>'BarangController@index']);
        Route::post('/',['as'=>'addbarang','uses'=>'BarangController@store']);
        Route::post('/{id}',['as'=>'update','uses'=>'BarangController@update']);
    });
    
});

Route::get('/cariaku','ParticipantController@search_username')->name('cariaku');
Route::post('/cariaku','ParticipantController@show_stat_cari')->name('cariakupost');

Route::get('/statusku/{generate_code}','ParticipantController@show_stat')->name('show_stat');