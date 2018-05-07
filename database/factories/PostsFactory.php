<?php
/**
 * @author:zhangqing <1247703145@qq.com>
 *
 * @copyright 2018/4/8 moerlong.com
 */

$factory->define(App\Models\PostsModel::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'body' => $faker->text(200),
        'group_type' => random_int(1,2),
        'group_id' => random_int(1,50),
        'user_id' => random_int(1,14),
        'is_blocked' => 0,
        'is_recommended' => 0,
        'status'=>1
    ];
});