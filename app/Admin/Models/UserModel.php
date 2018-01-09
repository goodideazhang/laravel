<?php

namespace App\Admin\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Admin\Models\UserModel
 *
 * @mixin \Eloquent
 */
class UserModel extends Model
{
    protected $table='users';

    /**
     * 可以被批量赋值的属性.
     * @var array
     */
    protected $fillable=[
        'username', 'name', 'avatar','password'
    ];

    protected $hidden=[
        'password','remember_token'
    ];
}
