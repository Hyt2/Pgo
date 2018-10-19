<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class GoodsTypeModel extends CommonModel
{
    protected $table = 'goods_type';

    public function AttrModel(){
        return $this->hasMany('App\Http\Model\Admin\GoodsAttrModel','type_id','id');
    }
}
