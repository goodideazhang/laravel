<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @copyright 2017/11/14 moerlong.com
 */

namespace App\Services;


class CompanyService
{
    public $xiaomi;

    public function __construct(XiaomiService $xiaomi)
    {
        $this->xiaomi=$xiaomi;
    }

    public function index(){
        return $this->xiaomi;
    }

}