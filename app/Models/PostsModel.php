<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @copyright 2018/4/8 moerlong.com
 */
namespace App\Models;

use \Illuminate\Database\Eloquent\Model;

class PostsModel extends Model
{
    protected $table='posts';

    public function test(){
        $this->find();
    }

}