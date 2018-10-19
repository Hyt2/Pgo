<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Model\Admin\GoodsBrandModel as GoodsBrand;


class GoodsBrandController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 1. 查询数据
        $data = (new GoodsBrand)->getData();
        return view('admin.goods_brand.index', ['data' => $data]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.goods_brand.add');
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
        return (new GoodsBrand)->add($data, $request);
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
        return view('admin.goods_brand.edit', ['data' => GoodsBrand::find($id)]);
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
        $data = $request->except('_token', '_method');
        return (new GoodsBrand)->edit($id, $data, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $old_logo = GOODS_BRAND . '/' . GoodsBrand::find($id)->brand_logo;
        if (file_exists($old_logo)) {
            @unlink($old_logo);
        }

        if (GoodsBrand::destroy($id)) {
            $data = ['status' => 0, 'msg' => '删除商品品牌成功!'];
        } else {
            $data = ['status' => 1, 'msg' => '商品品牌删除失败,请稍后再试!'];
        }

        return $data;
    }
}
