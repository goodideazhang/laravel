<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Http\Models\CategoryModel
 *
 * @mixin \Eloquent
 */
class CategoryModel extends Model
{
//    protected $table='admin_category';

    public function __construct(array $attributes = [])
    {
//        $connection = config('database.connection') ;
//
//        $this->setConnection($connection);

        $this->setTable('admin_category');

        parent::__construct($attributes);
    }
}
