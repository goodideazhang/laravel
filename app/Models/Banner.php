<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @date 2018/5/25 17:15
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    const CREATED_AT = 'created_time';

    const UPDATED_AT = 'updated_time';

    protected $table = 'banner';

    protected $fillable = [
        'name',
        'synopsis',
        'category_id',
        'link',
        'img_path',
        'sort',
    ];

}