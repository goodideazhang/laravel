<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Http\Models\CategoryModel
 *
 * @mixin \Eloquent
 */
class Category extends Model
{
    const CREATED_AT = 'created_time';
    const UPDATED_AT = 'updated_time';

    protected $table='category';

    protected $fillable=[
        'pid',
        'name',
        'path',
        'level',
        'synopsis',
        'enabled',
        'enabled',

    ];
}
