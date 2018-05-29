<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @date 2018/5/25 17:19
 */

namespace App\Repositories;


use App\Models\Banner;
use Prettus\Repository\Eloquent\BaseRepository;

class BannerRepository extends BaseRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Banner::class;
    }
}