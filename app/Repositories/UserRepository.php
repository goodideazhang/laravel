<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @copyright 2017/11/24 moerlong.com
 */

namespace App\Repositories;


use Prettus\Repository\Eloquent\BaseRepository;

class UserRepository extends BaseRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return 'App\User';
    }
}