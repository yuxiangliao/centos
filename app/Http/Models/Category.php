<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table='category';
    //主键
    protected $primaryKey='cate_id';

    public $timestamps = false;
}
