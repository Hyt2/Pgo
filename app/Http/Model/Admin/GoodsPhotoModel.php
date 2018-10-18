<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class GoodsPhotoModel extends Model
{
    protected $primaryKey = 'id';
    //维护时间
    public $timestamps = false;
    //不可添加
    protected $guarded = [];
    protected $table = 'goods_photo';
}
