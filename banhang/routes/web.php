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

route::get('index',[
  'as'=>'trangchu',
  'uses'=>'PageController@Index'
]);

// route::get('loai-sanpham/{type}',[
//   'as'=>'loaisanpham',
//   'uses'=>'PageController@getLoaisanpham'
// ]);

route::get('san_pham_{id}','PageController@getLoaisanpham');
route::get('loai_sanpham','PageController@loaisanpham');


route::get('chitiet/{id}',[
  'as'=>'chitietsanpham',
  'uses'=>'PageController@getChitietsanpham'
]);

route::get('lienhe',[
  'as'=>'lienhe',
  'uses'=>'PageController@getLienhe'
]);

route::get('gioithieu',[
  'as'=>'gioitieu',
  'uses'=>'PageController@getGioithieu'
]);

route::get('add_to_cart/{id}',[
  'as'=>'themgiohang',
  'uses'=>'PageController@getthemgiohang'
]);

route::get('xoa-gio-hang/{id}',[
  'as'=>'xoagiohang',
  'uses'=>'PageController@getXoahang'
]);

route::get('dat_hang',[
  'as'=>'dathang',
  'uses'=>'PageController@getDathang' 
]);

route::post('dat_hang','PageController@postDathang');