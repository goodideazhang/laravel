<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @copyright 2017/11/24 moerlong.com
 */
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class TestFacade extends Facade
{
    protected static function getFacadeAccessor()
    {

        return 'testFacade';
    }

}