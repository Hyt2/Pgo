<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

/**
 * [GoodsAttrModel 商品属性模型]
 * [`goods_attr` this is the goods attribute table]
 * @author [阳] <[<email 1025958116@qq.com>]>
 */
class GoodsAttrModel extends CommonModel
{
    protected $table = 'goods_attr';


    public function getData() 
    {
    	return $this->orderBy('id', $this->order)->paginate($this->page);
    }

    public function add($data) 
    {
    	$rules = [
    		'attr_name'   => "required",
    		'attr_type'   => 'required',
    		'attr_values' => 'required',
    		'attr_type'   => 'required',
    		'type_id'     => 'required',
    	];

    	$message = [
    		'attr_name.required'   => '属性名称不能为空!',
    		'type_id.required'     => '属性类型不能为空!',
    		'attr_values.required' => '属性值不能为空!',
    		'type_id.required'     => '属性类型不能为空!',
    		'attr_type.required'   => '属性类型不能为空!',
    	];

    	$validator  = Validator::make($data, $rules, $message);
    	if ($validator->fails()) {
    		return msg($validator);
    	}

    	if (!$this->insert($data)) {
    		return msg('商品属性添加失败, 请稍后再试!');
    	}

    	return msg('商品属性添加成功!', 'admin/goods_attr');
    }

    public function edit($id, $data)
    {
    	$rules = [
    		'attr_name'   => "required",
    		'attr_type'   => 'required',
    		'attr_values' => 'required',
    		'attr_type'   => 'required',
    		'type_id'     => 'required',
    	];

    	$message = [
    		'attr_name.required'   => '属性名称不能为空!',
    		'type_id.required'     => '属性类型不能为空!',
    		'attr_values.required' => '属性值不能为空!',
    		'type_id.required'     => '属性类型不能为空!',
    		'attr_type.required'   => '属性类型不能为空!',
    	];

    	$validator  = Validator::make($data, $rules, $message);
    	if ($validator->fails()) {
    		return msg($validator);
    	}

    	if (!$this->where('id', $id)->update($data)) {
    		return msg('商品属性修改失败, 请稍后再试!');
    	}

    	return msg('商品属性修改成功!', 'admin/goods_attr');
    }

    //商品属性 对应 商品类型 n:1
    public function TypeModel(){
        return $this->belongsTo('App\Http\Model\Admin\GoodsTypeModel','type_id','id');
    }
}
