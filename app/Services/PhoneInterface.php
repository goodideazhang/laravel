<?php
namespace App\Services;
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @copyright 2017/11/14 moerlong.com
 */

interface PhoneInterface
{
    public function tell($num);

    public function internet($flow);
}