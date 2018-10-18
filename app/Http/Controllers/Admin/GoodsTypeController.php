<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\GoodsAttrModel;
use App\Http\Model\Admin\GoodsTypeModel;
use Illuminate\Http\Request;
use Mockery\Exception;

class GoodsTypeController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = GoodsTypeModel::orderBy('id','asc')->paginate(5);
        return view('admin.goods_type.index',['title'=>'商品类型','title2'=>'浏览商品类型','res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.goods_type.add',['title'=>'商品类型','title2'=>'添加商品类型']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = $request->except('_token');
        //验证
//        $this->validate($request,[
//            'type_name' => 'regex:/^.{9,12}$/'
//        ],[
//            'type_name.regex' => '商品类型长度不符合~'
//        ]);
        //添加到数据库
        try{
            $rs = GoodsTypeModel::insert($res);
            if($rs){
                return redirect(url('/admin/goods_type'))->with('success','添加商品类型成功');
            }
        }catch(Exception $e){
            return back()->with('error','添加商品类型失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //属性列表
//        $res = GoodsAttrModel::where('type_id',$id)->get();
        $res = GoodsTypeModel::find($id);
        $data = $res->AttrModel()->get();
//        dd($res->type_name);
//        dd($data->type_name);

        return view('admin.goods_type.attr',['title'=>'商品属性','title2'=>'浏览商品属性','type_name'=>$res->type_name,'res'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $res = GoodsTypeModel::find($id);
        return view('admin.goods_type.edit',['title'=>'商品类型','title2'=>'修改商品类型','res'=>$res]);
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
        $res = $request->except('_token','_method');
        //验证
//        $this->validate($request,[
//            'type_name' => 'regex:/^.{9,12}$/'
//        ],[
//            'type_name.regex' => '商品类型长度不符合~'
//        ]);
        try{
            $res =GoodsTypeModel::where('id',$id)->update($res);
            if($res){
                return redirect(url('/admin/goods_type'))->with('success','修改成功');
            }else{
                return redirect(url('/admin/goods_type'));
            }
        }catch(Exception $e){
            return back()->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $where[] = ['type_id','=',$id];
        $new = GoodsAttrModel::where($where)->first();
        if(empty($new)){
            //删除
            try{
                $res = GoodsTypeModel::where('id',$id)->delete();
                if($res){
                    return redirect(url('/admin/goods_type'))->with('success','删除成功');
                }
            }catch(Exception $e){
                return back()->with('error','删除失败');
            }
        }else{
            //不为空表示有子分类
            return back()->with('error','该商品类型下还有商品属性~');
        }
    }
}
