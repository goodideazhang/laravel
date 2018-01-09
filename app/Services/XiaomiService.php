<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @copyright 2017/11/14 moerlong.com
 */

namespace App\Services;


class XiaomiService implements PhoneInterface
{

    public function tell($num)
    {
        return '电话号码是'.$num;
    }

    public function internet($flow)
    {
        return '网络下载速度'.$flow.'k/s';
    }
}