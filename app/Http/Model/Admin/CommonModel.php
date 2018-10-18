<?php

namespace App\Http\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class CommonModel extends Model
{
    /**
     * [$primaryKey 表主键]
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * [$timestamps 时间字段]
     * @var boolean
     */
    public $timestamps = false;
    /**
     * [$order 后台的列表排序方式]
     * @var string
     */
    public $order = 'DESC';
    /**
     * [$page 后台的分页数量]
     * @var string
     */
    public $page  = '5';

    final public function __construct() 
    {
        parent::__construct();
        $this->order = config('site.list_order');
        $this->page  = config('site.list_page');
        $this->init();
    }

    /**
     * 子类重写使用的构造函数
     */
    public function init(){}


    /**
     * [upload 文件上传方法]
     * @param  [source]  $pic      [图片文件的资源对象]
     * @param  [string]  $field    [数据库中对应的字段名称]
     * @param  [string]  $dir_path [图片上传最终路径]
     * @param  [boolean] $offset   [是否多文件上传偏移]
     * @return [string]            [上传成功的路径部分(存储字段)]
     */
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
