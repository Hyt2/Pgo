<?php

namespace App\Http\Model\Admin;


class NavModel extends CommonModel
{
    //
    protected $table='nav';

    public function index($req)
    {
    	return $this->orderBy('id',$this->order)->where(function($query) use ($req){
    		//搜索
    		$query->where('name','like','%'.$req->key.'%');
    	})->paginate($this->page);
    }

    public function add($data)
    {
    	if ($this->insert($data)) {
            return msg('添加导航成功', '/admin/nav');
        }

        return msg('添加导航失败!');
    }

    public function edit($data,$id)
    {
    	if($this->where('id',$id)->update($data)){
    		return msg('修改导航成功!','/admin/nav');
    	}
    	return msg('修改导航失败!');
    }
}
