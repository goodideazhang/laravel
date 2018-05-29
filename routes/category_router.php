<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @date 2018/5/24 10:11
 */
Route::group(['prefix'=>'/category'], function ()  {
    Route::get('/index', 'CategoryController@index');
    Route::post('/store', 'CategoryController@store');
});
