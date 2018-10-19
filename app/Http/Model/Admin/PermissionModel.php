<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class PermissionModel extends Model
{
    protected $table = 'permission';

    protected $primaryKey = 'id';
    //维护时间
    public $timestamps = false;
    //不可添加
    protected $guarded = [];

}
