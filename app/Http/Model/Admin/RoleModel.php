<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    protected $table = 'role';

    protected $primaryKey = 'id';
    //维护时间
    public $timestamps = false;
    //不可添加
    protected $guarded = [];

    /**
     * 角色关联权限  n:n
     * 参数1:要关联表的命名空间
     * 参数2：多对多中间关联表
     * 参数3：关联表的字段
     * 参数4：关联表的字段
     */
    public function permissions(){
        return $this->belongsToMany('App\Http\Model\Admin\PermissionModel','role_permission','role_id','per_id');
    }
}
