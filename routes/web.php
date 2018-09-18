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
    return view('welcome');
});
//承运商定义
Route::get('common/show','CommonController@show');
Route::get('common/add','CommonController@add');
Route::post('common/doadd','CommonController@doadd');
Route::get('common/del','CommonController@del');
Route::get('common/upd','CommonController@upd');
Route::post('common/doupd','CommonController@doupd');
//车型接口
Route::get('cartype/add','CartypeController@add');
Route::get('cartype/doadd','CartypeController@doadd');
Route::get('cartype/show','CartypeController@show');
Route::get('cartype/del','CartypeController@del');
Route::get('cartype/upd','CartypeController@upd');
Route::get('cartype/doupd','CartypeController@doupd');
//司机接口
Route::get('driver/driver','DriverController@driver');
Route::any('driver/add','DriverController@add');
Route::any('driver/show','DriverController@show');
Route::any('driver/dele','DriverController@dele');
Route::any('driver/edit','DriverController@edit');
Route::any('driver/update','DriverController@update');
//车辆接口
Route::get('newcar/add','NewcarController@add');
Route::post('newcar/doadd','NewcarController@doadd');
Route::any('newcar/show','NewcarController@show');
Route::any('newcar/del','NewcarController@del');
Route::any('newcar/upd','NewcarController@upd');
Route::any('newcar/doupd','NewcarController@doupd');
//临时授权定义
Route::get('author/show','AuthorizationController@show');
Route::get('author/add','AuthorizationController@add');
Route::post('author/doadd','AuthorizationController@doadd');
Route::get('author/upd','AuthorizationController@upd');
Route::any('author/excel','AuthorizationController@excel');
//派车单接口
Route::get('send/send','SendController@send');
Route::any('send/add','SendController@add');
Route::any('send/show','SendController@show');
Route::any('send/dele','SendController@dele');
Route::any('send/edit','SendController@edit');
Route::any('send/update','SendController@update');


//excel导出(本地)
Route::get('excel/export','ExcelController@export');
Route::get('excel/import','ExcelController@import');
//三级联动(本地)
Route::any('author/test','AuthorizationController@test');
//多条件查询
//https://blog.csdn.net/u012767761/article/details/72903118
//多表联查
//https://laravel-china.org/docs/laravel/5.4/eloquent-relationships/1265#one-to-one



















//多请求路由，指定get,post---可以接受get和post请求---backend控制器下info方法
//Route::match(['get','post'],'test/info','TestController@info');
//多请求路由，不需指定请求方法，响应所有请求---backend控制器下info方法
//Route::any('test/info','TestController@info');
//路由参数
//Route::get('user/{id}',function($id){
//    return 'userid-'.$id;
//});
//Route::get('user/{name?}',function($name='default'){
//    return 'username-'.$name;
//});
//Route::get('user/{id}/{name?}',function($id,$name='default'){
//    return 'userid='.$id.'&nbsp&nbsp&nbsp'.'username='.$name;
//})->where(['id'=>'[0-9]+','name','[a-zA-Z]+']);