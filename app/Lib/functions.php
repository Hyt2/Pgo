<?php
/**
 * Created by PhpStorm.
 * User: 阳
 * Date: 2018/9/28
 * Time: 16:44
 */


/**
 * [model 快速实例化模型的方法]
 * @author [阳] <[<email 1025958116@qq.com>]>
 * @param  string $name    [模型的名称, 不加Model后缀的]
 * @param  string $namespace [命名空间 (模块)]
 * @return [object]          [模型对象]
 */
function model($name, $namespace = 'Admin')
{
	$namespace = '\App\Http\Model\\' . $namespace;
	$class = $namespace . '\\' . $name . 'Model';
	return new $class;
}


/**
 * 快速实例化数据库查询构造器
 * @author [阳] <[<email 1025958116@qq.com>]>
 * @param  $table_name [表名]
 * @return mixed       [查询构造器对象]
 */
function db($table_name)
{
    return \Illuminate\Support\Facades\DB::table($table_name);
}


/**
 * [msg 提示视图,重定向]
 * @author [阳] <[<email 1025958116@qq.com>]>
 * @param $msg        [提示信息]
 * @param bool $url   [重定向地址 不填或者false为back地址]
 * @param int $wait   [多少秒后重定向]
 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
 */
function msg($msg, $url = false, $wait = 3)
{
    if (is_object($msg)) {
        $msg = $msg->errors()->all()[0];
    }

    if ($url === false) {
        $url = $_SERVER['HTTP_REFERER'];
    }
    return view('error.' . config('site.error_template'), compact('msg', 'url', 'wait'));
}


/**
 * [u 保留结尾部一定有某个字符 ` / `]
 * @author [阳] <[<email 1025958116@qq.com>]>
 * @param  string $dir  [字符串 (一般给目录使用,可用常量)]
 * @param  string $char [尾部处的字符 一般是判断 `/`]
 * @return string       [处理后的目录字符]
 */
function u($dir, $char = '/')
{
    return rtrim($dir, $char) . $char;
}



/**
 * 字符串截取
 * @author [阳] <[<email 1025958116@qq.com>]>
 * @param $sourcestr  [字符串的字节数]
 * @param $cutlength  [截取后的长度]
 * @return string     [处理截取后的字符]
 */
function cut_str($sourcestr,$cutlength)
{

    $returnstr = '';

    $i = 0;

    $n = 0;

    $str_length = strlen($sourcestr);//字符串的字节数

    while (($n < $cutlength) and ($i<=$str_length))

    {

        $temp_str=substr($sourcestr,$i,1);

        $ascnum=Ord($temp_str);//得到字符串中第$i位字符的ascii码

        if ($ascnum>=224)    //如果ASCII位高与224，

        {

            $returnstr=$returnstr.substr($sourcestr,$i,3); //根据UTF-8编码规范，将3个连续的字符计为单个字符

            $i=$i+3;            //实际Byte计为3

            $n++;            //字串长度计1

        }

        elseif ($ascnum>=192) //如果ASCII位高与192，

        {

            $returnstr=$returnstr.substr($sourcestr,$i,2); //根据UTF-8编码规范，将2个连续的字符计为单个字符

            $i=$i+2;            //实际Byte计为2

            $n++;            //字串长度计1

        }
        elseif ($ascnum>=65 && $ascnum<=90) //如果是大写字母，
        {
            $returnstr = $returnstr.substr($sourcestr,$i,1);
            $i = $i+1;            //实际的Byte数仍计1个
            $n++;            //但考虑整体美观，大写字母计成一个高位字符
        } else {
            $returnstr = $returnstr . substr($sourcestr, $i, 1);
            $i = $i+1;            //实际的Byte数计1个
            $n = $n+0.5;        //小写字母和半角标点等与半个高位字符宽...
        }
    }

    if ($str_length>$i){

        $returnstr = $returnstr . "...";//超过长度时在尾处加上省略号

    }

    return $returnstr;

}

/**
 * [根据状态改变符合该状态的class样式]
 * @author [园] <[<email 1664747641@qq.com>]>
 * @param  string $status  [状态])
 * @return string       [样式名称]
 */
function stas($status)
{
    if($status=='up') return 'btn-danger'; 
    return 'btn-azure';
}

function sw($str,$sta=0,$len=12)
{   
    if(mb_strlen($str)>$len){
        return substr($str,$sta,$len-1);
    }
    return $str;
}