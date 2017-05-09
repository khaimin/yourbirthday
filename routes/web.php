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
/* for client*/
Route::get('/',['as'=>'index','uses'=>'ClientController@index']);
Route::get('/banh-kem',['as'=>'banhkem','uses'=>'ClientController@banhkem']);
Route::get('/thuc-an',['as'=>'thucan','uses'=>'ClientController@thucan']);
Route::get('/qua-tang',['as'=>'quatang','uses'=>'ClientController@quatang']);
Route::get('/trang-tri',['as'=>'trangtri','uses'=>'ClientController@trangtri']);
Route::get('/blog',['as'=>'blog','uses'=>'ClientController@blog']);
Route::get('/lien-he',['as'=>'lienhe','uses'=>'ClientController@lienhe']);


// for admin
Route::group(['prefix'=>'admin'],function(){
    Route::get('/',['as'=>'admin.index','uses'=>'AdminController@index']);
    // group loai san pham
    Route::group(['prefix'=>'loaisanpham'],function(){
    	Route::get('/',['as'=>'admin.loaisanpham.index', 'uses'=>'LoaiSanPhamController@index']);
    	Route::get('/create', ['as'=>'admin.loaisanpham.create', 'uses'=>'LoaiSanPhamController@create']);
    	Route::post('/create', ['as'=>'admin.loaisanpham.store', 'uses'=>'LoaiSanPhamController@store']);
    	Route::get('/edit/{id}', ['as'=>'admin.loaisanpham.edit', 'uses'=>'LoaiSanPhamController@edit']);
    	Route::post('/edit/{id}', ['as'=>'admin.loaisanpham.update', 'uses'=>'LoaiSanPhamController@update']);
    	Route::get('/del/{id}', ['as'=>'admin.loaisanpham.del', 'uses'=>'LoaiSanPhamController@destroy']);
    });
    // group san pham
    Route::group(['prefix'=>'sanpham'],function(){
     	Route::get('/',['as'=>'admin.sanpham.index', 'uses'=>'SanPhamController@index']);
     	Route::get('/create',['as'=>'admin.sanpham.create', 'uses'=>'SanPhamController@create']);
     	Route::post('/create', ['as'=>'admin.sanpham.store', 'uses'=>'SanPhamController@store']);
        Route::get('/update/{id}', ['as'=>'admin.sanpham.update', 'uses'=>'SanPhamController@update']);
        Route::post('/update/{id}', ['as'=>'admin.sanpham.updatedata', 'uses'=>'SanPhamController@updatedata']);
        Route::get('/del/{id}', ['as'=>'admin.sanpham.del', 'uses'=>'SanPhamController@destroy']);



    });

});