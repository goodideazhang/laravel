<?php

namespace App\Http\Models;


use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Silber\Bouncer\Database\HasRolesAndAbilities;

/**
 * App\Http\Models\UserModel
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Silber\Bouncer\Database\Ability[] $abilities
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\Silber\Bouncer\Database\Role[] $roles
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\UserModel whereIs($role)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\UserModel whereIsAll($role)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Models\UserModel whereIsNot($role)
 * @mixin \Eloquent
 */
class UserModel extends User
{
    use HasRolesAndAbilities;

    use Notifiable;

    protected $dateFormat = 'U';

    protected $table='users';

    /**
     * 可以被批量赋值的属性.
     * @var array
     */
    protected $fillable=[
        'username', 'name', 'avatar','password','email'
    ];

    protected $hidden=[
        'password','remember_token'
    ];

}
