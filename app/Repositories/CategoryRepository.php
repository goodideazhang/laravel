<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @copyright 2017/11/15 moerlong.com
 */

namespace App\Repositories;


use Prettus\Repository\Eloquent\BaseRepository;

class CategoryRepository extends BaseRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return 'App\Http\Models\CategoryModel';
    }
}