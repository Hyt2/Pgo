<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class NoticeCateModel extends CommonModel
{
    //表
    protected $table='notice_cate';
    static public $cate;



    static public function getcate($cid=0)
    {
	    if(empty(self::$cate)){
	        self::$cate=self::where('status','!=','1')->get();
	    }
	    $re=[];
	    foreach (self::$cate as $k => $v) {
	        if($v->cid==$cid){
	            $v->sub=self::getcate($v->id);
	            $re[]=$v;
	        }
	    }
	    return $re;
	}

}
