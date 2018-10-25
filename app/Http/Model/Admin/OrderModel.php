<?php

namespace App\Http\Model\Admin;

use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;

/**
 * [GoodsAttrModel 后台管理员模型]
 * [`goods_attr` this is the goods attribute table]
 * @author [阳] <[<email 1025958116@qq.com>]>
 */
class OrderModel extends CommonModel
{
    protected $table = 'orders';
    protected $primaryKey = 'oid';

    
    public function getData() 
    {
        return $orders = self::orderBy('oid', $this->order)->paginate($this->page); 
    }

    public function detail()
    {
        return $this->hasOne('\App\Http\Model\Admin\OrderDetailModel', 'orders_id', 'oid');
        // return $this->belongsTo('\App\Http\Model\Admin\OrderDetailModel', 'orders_id', 'oid');
    }

   

    public function edit($id, $data)
    {
    	$rules = [
            'rec'   => "required",
            'addr'  => 'required',
            'tel'   => 'required',
        ];

        $message = [
            'rec.required'  => '收货人姓名不能为空!',
            'addr.required' => '收货人地址不能为空!',
            'tel.required'  => '联系人电话不能为空!',
        ];

    	$validator  = Validator::make($data, $rules, $message);
    	if ($validator->fails()) {
    		return msg($validator);
    	}

        $res  = self::where(['oid' => $id])->update($data);
        if ($res) {
            return msg('修改订单信息成功', 'admin/order');
        } else {
            return msg('修改订单信息失败');
        }
    }
}
