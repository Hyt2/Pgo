<?php

namespace App\Http\Model\Admin;

use Illuminate\Support\Facades\Validator;

/**
 * [GoodsAttrModel 后台管理员模型]
 * [`goods_attr` this is the goods attribute table]
 * @author [阳] <[<email 1025958116@qq.com>]>
 */
class AdminModel extends CommonModel
{
    protected $table = 'admin';
    
    public function getData() 
    {
    	return $this->orderBy('id', $this->order)->paginate($this->page);
    }

    public function add($data) 
    {
    	$rules = [
    		'name'   => "required",
    		'pwd'    => 'required',
    		'email'  => 'required',
    	];

    	$message = [
    		'name.required'  => '管理员名称不能为空!',
    		'pwd.required'   => '管理员密码不能为空!',
    		'email.required' => '管理员邮箱不能为空!',
    	];

    	$validator  = Validator::make($data, $rules, $message);
    	if ($validator->fails()) {
    		return msg($validator);
    	}

        $data['pwd'] = md5($data['pwd']);
        // 判断有没有图片上传
        if (!empty($data['img'])) {
            $data['img'] = $this->upload($data['img'], 'img', ADMIN_IMG);
        }

        $data['create_time'] = time();
        $data['last_time']   = time();

    	if (!$this->insert($data)) {
    		return msg('管理员添加失败, 请稍后再试!');
    	}

    	return msg('管理员添加成功!', 'admin/admin');
    }

    public function edit($id, $data)
    {
    	$rules = [
            'name'   => "required",
            'email'  => 'required',
        ];

        $message = [
            'name.required'  => '管理员名称不能为空!',
            'email.required' => '管理员邮箱不能为空!',
        ];

    	$validator  = Validator::make($data, $rules, $message);
    	if ($validator->fails()) {
    		return msg($validator);
    	}

        if (!empty($data['img'])) {
            $old_img = u(ADMIN_IMG) . $this->find($id)->img;
            if (file_exists($old_img)) {
                @unlink($old_img);
            }
            $data['img'] = $this->upload($data['img'], 'img', ADMIN_IMG);
        }

    	if (!$this->where('id', $id)->update($data)) {
    		return msg('管理员修改失败, 请稍后再试!');
    	}

    	return msg('管理员修改成功!', 'admin/admin');
    }
}
