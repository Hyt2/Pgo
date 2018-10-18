<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * [CommonController 后台模块应用控制器基类]
 * @author [阳] <[<email address 1025958116@qq.com>]>
 */
class CommonController extends Controller
{
    /**
     * [$model <该控制器主要用到的模型>]
     * [<使用model函数快捷创建,不含Model后缀>]
     * @var string [<模型的名称>]
     */
    protected $model;
    /**
     * [$ctrl <当前控制器名称>]
     * @var [string]
     */
    protected $ctrl;
    /**
     * [$action <当前操作名称>]
     * @var [string]
     */
    protected $action;


    /**
     * [__construct 主控制器构造方法, 用于自动属性赋值]
     */
    final public function __construct()
    {
        // $this->ctrl = class_basename(get_class($this));
        // $this->action = 
        $this->_init_();
    }

    /**
     * [_init_ 构造方法自动触发, 用于子类写构造业务, 用于子类重写]
     */
    public function _init_(){}

}
