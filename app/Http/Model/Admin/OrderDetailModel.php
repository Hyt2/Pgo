<?php

namespace App\Http\Model\Admin;

use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;

/**
 * [GoodsAttrModel 后台管理员模型]
 * [`goods_attr` this is the goods attribute table]
 * @author [阳] <[<email 1025958116@qq.com>]>
 */
class OrderDetailModel extends CommonModel
{
    protected $table = 'order_detail';
    // protected $primaryKey = 'oid';

    public function orders()
    {
        return $this->belongsTo('\App\Http\Model\Admin\OrderModel', 'orders_id', 'oid');
    }

    public function goods()
    {
        return $this->belongsTo('\App\Http\Model\Admin\GoodsModel', 'goods_id', 'id');
    }
    
}
