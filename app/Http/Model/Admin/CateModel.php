<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class CateModel extends CommonModel
{
    static public $cate;
    //
    protected $table='goods_category';
    protected $primaryKey='id';

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


    static public function getcate($pid=0){
        if(empty(self::$cate)){
            self::$cate=self::all();
        }
        $re=[];
        foreach (self::$cate as $k => $v) {
            if($v->pid==$pid){
                $v->sub=self::getcate($v->id);
                $re[]=$v;
            }
        }
        return $re;
    }


    public function twocate()
    {
        if(empty(self::$cate)){
            self::$cate=self::all();
        }
        $data=[];
        foreach (self::$cate  as $k => $v) {
            if(substr_count($v->path, ',')==2){
                $data[]=$v;
            }
        }
        return $data;
    }

}
