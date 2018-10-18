<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class LinksModel extends CommonModel
{
    //表名
    protected $table      = 'links';
    protected $primaryKey = 'id';

    /**
     * 该模型是否被自动维护时间戳
     *
     * @var bool
     */
    public $timestamps = false;

    /**
	 * 不可被批量赋值的属性。
	 *
	 * @var array
	 */
	protected $guarded = [];


    public function index($req) 
    {
        //
         return $this->orderBy('id', $this->order)->where(function($query) use($req){
            //检测链接标题
            $title = $req->input('title');
            //如果链接标题不为空
            if(!empty($title)) {
                $query->where('title','like','%'.$title.'%');
            }
        })->paginate($this->page);
    }

    public function add($data) 
    {
       if (isset($data['logo'])) {
            /**
             * 1. 图片的资源对象 
             * 2. 数据中对应的字段名称 
             * 3. 图片上传最终存储路径
             */
            $data['logo'] = $this->upload($data['logo'], 'logo', LINKS_IMG);
        }
        
        if ($this->insert($data)) {
            return msg('添加外链成功', 'admin/links');
        }

        return msg('添加外链失败!');
        
    }

    public function edit($id, $data) 
    {
        if (isset($data['logo'])) {
            $src = u(LINKS_IMG) . $this->find($id)->logo;
            @unlink($src);
            /**
             * 1. 图片的资源对象 
             * 2. 数据中对应的字段名称 
             * 3. 图片上传最终存储路径
             */
            $data['logo'] = $this->upload($data['logo'], 'logo', LINKS_IMG);
        }
        
        if ($this->where('id', $id)->update($data)) {
            return msg('修改外链成功', 'admin/links');
        }

        return msg('修改外链失败!');
    }
}
