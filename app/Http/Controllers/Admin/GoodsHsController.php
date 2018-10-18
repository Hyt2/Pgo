<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\GoodsModel;
use App\Http\Model\Admin\GoodsPhotoModel;
use App\Http\Model\Admin\GoodsTypeModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Exception;

class GoodsHsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //搜索
        $res = GoodsModel::orderBy('id','asc')->where(function($query) use($request){
            //检测 与判断
            $goods_num = $request->input('goods_num');
            $goods_name = $request->input('goods_name');
            $type_id = $request->input('type_id');
            if(!empty($goods_num)){
                $query->where('goods_num',$goods_num);
            }
            if(!empty($goods_name)){
                $query->where('goods_name','like','%'.$goods_name.'%');
            }
            if(!empty($type_id)){
                $query->where('type_id',$type_id);
            }
            $query->where('goods_hs',1);
        })->paginate($request->input('num',3));
        //商品类型
        $type = GoodsTypeModel::orderBy('id','asc')->get();
        foreach ($type as $k=>$v){
            $v->type_name = str_repeat('&nbsp;',3).'|--'.$v->type_name;
        }
        return view('admin.goods.hs',['title'=>'商品管理','title2'=>'商品回收站','res'=>$res,'type'=>$type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        try{
            $res = GoodsModel::where('id',$id)->update(['goods_hs'=>0]);
            if($res){
                return redirect(url('/admin/goods'))->with('success','商品还原成功');
            }
        }catch (Exception $e){
            return back()->with('error','商品还原失败');
        }
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            //删除 主表加附表
            $goods = GoodsModel::find($id);
            $img = GOODS_IMG . '/' .$goods->goods_img;
            $photo = GoodsPhotoModel::where('goods_id',$id)->get();
            foreach ($photo as $k=>$v){
                $array[] = GOODS_IMG . '/' .$v->img;
            }
            $res = GoodsModel::where('id',$id)->delete();
            if($res){
                //主表删除成功,删除主表的图片
                @unlink($img);
                //删除附表的
                $hs = $goods->goodsimg()->delete();
                if($hs){
                    //附表删除数据 删除图片
                    foreach ($array as $kk=>$vv){
                        @unlink($vv);
                    }
                    return redirect(url('/admin/hs'))->with('success','修改成功');
                }
            }
            //删除图片主图和相册附图
        }catch (Exception $e){
            return back()->with('error','删除失败');
        }
    }
}
