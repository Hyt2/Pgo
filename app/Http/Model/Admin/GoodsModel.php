<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class GoodsModel extends Model
{

    protected $table = 'goods';

    protected $primaryKey = 'id';
    //维护时间
    public $timestamps = false;
    //不可添加
    protected $guarded = [];

    //商品与商品相册关联 1:n
    public function goodsimg(){
        return $this->hasMany('App\Http\Model\Admin\GoodsPhotoModel','goods_id','id');
    }
    //商品主表 对应 商品类别  n:1
    public function CateModel(){
        return $this->belongsTo('App\Http\Model\Admin\CateModel','cate_id','id');
    }
    //商品主表 对应 商品类型 n:1
    public function TypeModel(){
        return $this->belongsTo('App\Http\Model\Admin\GoodsTypeModel','type_id','id');
    }
    //商品主表 对应 商品品牌 n:1
    public function BrandModel(){
        return $this->belongsTo('App\Http\Model\Admin\GoodsBrandModel','brand_id','id');
    }
    //图片单张上传
    public function upload($pic, $field, $dir_path = _UPLOADS_, $offset = false)
    {
        $dir_path  = u($dir_path);
        $name      = $pic->getClientOriginalName();//得到图片名；
        $ext       = $pic->getClientOriginalExtension();//得到图片后缀；
        $file_name = md5(uniqid($name)) . '.' . $ext;//生成新的的文件名
        $date      = date('Y-m-d');

        $file_relative_path = $dir_path . $date;   // /static/uploads/2018-06-25
        $file_path = public_path($file_relative_path);  // E:\phpSet\www\Laravel_shop\public\assess/images/content/2018-06-25

        if (!is_dir($file_path)){
            try {
                mkdir($file_path);
            } catch (\Exception $e) {
                throw new \Exception("你还有一层目录没有自行创建哦!");
            }
        }
        $files = $offset !== false ? $_FILES[$field]['tmp_name'][$offset] : $_FILES[$field]['tmp_name'];
        $f = move_uploaded_file($files, $file_path . '/' . $file_name);
        if ($f) {
            return $date . '/' . $file_name;
        } else {
            return false;
        }
    }
}
