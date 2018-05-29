<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @date 2018/5/28 9:44
 */

Route::group(['prefix'=>'/banner'], function ()  {
    Route::get('/index', 'BannerController@index');
    Route::get('/list', 'BannerController@list');
    Route::get('/create', 'BannerController@create');
});
