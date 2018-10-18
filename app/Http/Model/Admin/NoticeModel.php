<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class NoticeModel extends Model
{
    protected $table = 'notice';
    protected $primaryKey = 'id';
    //维护时间
    public $timestamps = false;
    //不可添加
    protected $guarded = [];
    //商品公告与商品栏目关联 n:1
    public function cate(){
        return $this->belongsTo('App\Http\Model\Admin\NoticeCateModel','cate_id','id');
    }

}
