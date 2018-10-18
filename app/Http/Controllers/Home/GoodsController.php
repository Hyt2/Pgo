<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Admin\GoodsAttrModel;
use App\Http\Model\Admin\GoodsModel;
use App\Http\Model\Admin\GoodsPhotoModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    /**
     *  商品列表页
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //暂无分类遍历
        $goods = GoodsModel::get();

        // 排行榜
        $res = GoodsModel::orderBy('goods_show','desc')->paginate(5);
//        dd($res);
        return view('home.goodslist',['goods'=>$goods,'res'=>$res]);
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
        $goods = GoodsModel::find($id);

        if($goods){
            //点击查看商品详情 则修改goods数据库的goods_show  +1
            $num = $goods->goods_show;
            $num ++;
            GoodsModel::where('id',$id)->update(['goods_show'=>$num]);
        }
        //查出相同品牌的商品
        $goods_brand = GoodsModel::orderBy('goods_show','desc')->where('brand_id',$goods->brand_id)->get();
        //查出相同类型的商品
        $goods_type = GoodsModel::orderBy('goods_show','desc')->where('type_id',$goods->type_id)->get();
        $type = GoodsAttrModel::where('type_id',$goods->type_id)->get();
        $photo = GoodsPhotoModel::where('goods_id',$id)->get();
        return view('home.goods',['goods'=>$goods,'photo'=>$photo,'type'=>$type,'goods_brand'=>$goods_brand,'goods_type'=>$goods_type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
