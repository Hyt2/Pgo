<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\GoodsTypeModel;
use Illuminate\Http\Request;

/**
 * [GoodsAttrController 商品属性模块应用控制器]
 * @author [阳] <[<email 1025958116@qq.com>]>
 */
class GoodsAttrController extends CommonController
{
    /**
     * [$model <该控制器主要用到的模型>]
     * [<使用model函数快捷创建,不含Model后缀>]
     * @var string [<模型的名称>]
     */
    protected $model = 'GoodsAttr';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.goods_attr.index', ['goodsAttr' => model($this->model)->getData()]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $res = GoodsTypeModel::orderBy('id','asc')->get();
        return view('admin.goods_attr.add',['res'=>$res]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        return model($this->model)->add($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = GoodsTypeModel::orderBy('id','asc')->get();
        return view('admin.goods_attr.edit', ['goodsAttr' => model($this->model)::find($id),'res'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except('_method', '_token');
//        dd($data);
        return model($this->model)->edit($id, $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (model($this->model)->destroy($id)) {
            $data = ['status' => 0, 'msg' => '删除商品属性成功!'];
        } else {
            $data = ['status' => 1, 'msg' => '删除商品属性失败,请稍候再试!'];
        }
        return $data;
    }
}
