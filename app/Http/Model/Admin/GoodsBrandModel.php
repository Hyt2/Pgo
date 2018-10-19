<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

/**
 * [GoodsAttrModel 后台商品品牌模型]
 * [`goods_attr` this is the goods attribute table]
 * @author [阳] <[<email 1025958116@qq.com>]>
 */
class GoodsBrandModel extends CommonModel
{
    protected $table = 'goods_brand';
    
    public function getData() 
    {
        return $this->orderBy('sort', $this->order)->paginate($this->page);
    }

    public function add($data, $request) 
    {
    	$rules = [
    		'brand_name'   => "required",
    		'brand_url'    => 'required',
    		'brand_desc'   => 'required',
    	];

    	$message = [
            'brand_name.required' => '品牌名称不能为空!',
            'brand_url.required'  => '品牌地址不能为空!',
            'brand_desc.required' => '品牌描述不能为空!',
    	];

        // 处理图片
        $logo = $request->file('brand_logo');
        $data['brand_logo'] = $this->upload($logo, 'brand_logo', GOODS_BRAND);

        // 执行验证
    	$validator  = Validator::make($data, $rules, $message);
        // 如果以上规则有一条不通过 返回true
    	if ($validator->fails()) {
    		return msg($validator);
    	}

    	if (!$this->insert($data)) {
    		return msg('商品品牌添加失败, 请稍后再试!');
    	}

    	return msg('商品品牌添加成功!', 'admin/goods_brand');
    }

    public function edit($id, $data, $request) 
    {
        $rules = [
            'brand_name'   => "required",
            'brand_url'    => 'required',
            'brand_desc'   => 'required',
        ];

        $message = [
            'brand_name.required' => '品牌名称不能为空!',
            'brand_url.required'  => '品牌地址不能为空!',
            'brand_desc.required' => '品牌描述不能为空!',
        ];

        
        
        // 判断有没有图片上传
        if ($logo = $request->file('brand_logo')) {
            // 查询旧图片
            $old_logo = GOODS_BRAND . '/' . $this->find($id)->brand_logo;
            if (file_exists($old_logo)) {
                @unlink($old_logo);
            }

            /**
             * 1. 图片的资源对象
             * 2. 数据表中图片上传对应的字段名
             * 3. 图片上传存储在服务器的路径
             */
            $data['brand_logo'] = $this->upload($logo, 'brand_logo', GOODS_BRAND);
        }

        // 执行验证
        $validator  = Validator::make($data, $rules, $message);
        // 如果以上规则有一条不通过 返回true
        if ($validator->fails()) {
            return msg($validator);
        }
        
        if (!$this->where('id', '=', $id)->update($data)) {
            return msg('商品品牌修改失败, 请稍后再试!');
        }

        return msg('商品品牌修改成功!', 'admin/goods_brand');
    }
}
