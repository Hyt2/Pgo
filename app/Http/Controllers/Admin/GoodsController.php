<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\CateModel;
use App\Http\Model\Admin\GoodsBrandModel;
use App\Http\Model\Admin\GoodsModel;
use App\Http\Model\Admin\GoodsPhotoModel;
use App\Http\Model\Admin\GoodsTypeModel;
use App\Http\Requests\GoodsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class GoodsController extends CommonController
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
            $query->where('goods_hs',0);
        })->paginate($request->input('num',3));
        //商品类型
        $type = GoodsTypeModel::orderBy('id','asc')->get();
        foreach ($type as $k=>$v){
            $v->type_name = str_repeat('&nbsp;',3).'|--'.$v->type_name;
        }

        return view('admin.goods.index',['title'=>'商品管理','title2'=>'浏览商品','res'=>$res,'type'=>$type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //商品类别
        $cate = CateModel::select(DB::raw('*,concat(path,id) as paths'))->orderBy('paths')->get();
        foreach ($cate as $k=>$v){
            //path  0,1,4
            $num = substr_count($v->path,',')-1;
            $v->cate_name = str_repeat('&nbsp;', $num * 8).'|--'.$v->cate_name;
        }
        //商品品牌
        $brand = GoodsBrandModel::orderBy('id','asc')->get();
        foreach ($brand as $k=>$v){
            $v->brand_name = str_repeat('&nbsp;',8).'|--'.$v->brand_name;
        }
        //商品类型
        $type = GoodsTypeModel::orderBy('id','asc')->get();
        foreach ($type as $k=>$v){
            $v->type_name = str_repeat('&nbsp;',8).'|--'.$v->type_name;
        }

        return view('admin.goods.add',['title'=>'商品管理','title2'=>'添加商品','cate'=>$cate,'brand'=>$brand,'type'=>$type]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GoodsRequest $request)
    {
        //单独验证
        $this->validate($request,[
            'goods_img' => 'required',
            'img' => 'required',
        ],[
            'goods_img.required' => '商品主图,不能为空~',
            'img.required' => '商品相册,不能为空~',
        ]);
        //商品推荐位暂时没有完善  goods_tj
        $res = $request->except('_token','goods_img','goods_tj','img');
        //上传商品主图片
        if($img = $request->file('goods_img')) {
            $res['goods_img'] = model('Goods')->upload($img, 'goods_img', GOODS_IMG);
        }
        //处理商品编号
        $res['goods_num'] = date('YmdHis',time()).rand(0000,9999);
        //添加到数据库
//        dump($res);

        try{
            $rs = GoodsModel::create($res);
            if($rs){
                //模型关联1:n 关联商品相册
                $id = $rs->id;
                $goods = $rs::find($id);
                //整理多张长传的图片和路径
                if($request->file('img')){
                    $tu = $request->file('img');
                    $img = [];
                    foreach ($tu as $k=>$v){
                        $info = [];
                        $name      = $v->getClientOriginalName();//得到图片名；
                        $ext       = $v->getClientOriginalExtension();//得到图片后缀；
                        $file_name = md5(uniqid($name)) . '.' . $ext;//生成新的的文件名
                        $date      = date('Y-m-d');
                        $dir_path = GOODS_IMG;
                        $file_relative_path = $dir_path.'/'.$date;
                        $file_path = public_path($file_relative_path);
                        if (!is_dir($file_path)){
                            try {
                                mkdir($file_path);
                            } catch (\Exception $e) {
                                throw new \Exception("请创建该目录~");
                            }
                        }
                        $v->move($file_path,$date . '/' . $file_name);
                        $info['img'] = $date . '/' . $file_name;
                        $img[] = $info;
                    }
                }
                $photo = $goods->goodsimg()->createMany($img);
                if($photo){
                    return redirect(url('/admin/goods'))->with('success','添加商品成功');
                }
            }
        }catch(Exception $e){
            return back()->with('error','添加商品失败');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //商品类别
        $cate = CateModel::select(DB::raw('*,concat(path,id) as paths'))->orderBy('paths')->get();
        foreach ($cate as $k=>$v){
            //path  0,1,4
            $num = substr_count($v->path,',')-1;
            $v->cate_name = str_repeat('&nbsp;', $num * 8).'|--'.$v->cate_name;
        }
        //商品品牌
        $brand = GoodsBrandModel::orderBy('id','asc')->get();
        foreach ($brand as $k=>$v){
            $v->brand_name = str_repeat('&nbsp;',8).'|--'.$v->brand_name;
        }
        //商品类型
        $type = GoodsTypeModel::orderBy('id','asc')->get();
        foreach ($type as $k=>$v){
            $v->type_name = str_repeat('&nbsp;',8).'|--'.$v->type_name;
        }

        $res = GoodsModel::find($id);
        $photo = GoodsPhotoModel::where('goods_id',$id)->get();

        return view('admin.goods.edit',['title'=>'商品管理','title2'=>'添加商品','cate'=>$cate,'brand'=>$brand,'type'=>$type,'res'=>$res,'photo'=>$photo]);
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
        //商品推荐位暂时没有完善  goods_tj
        $res = $request->except('_token','goods_img','goods_tj','img','_method');
        //不修改商品编号；
        //是否修改图片
        //上传商品主图片
        if($img = $request->file('goods_img')) {
            $delete = GOODS_IMG . '/' .GoodsModel::find($id)->goods_img;
            $res['goods_img'] = model('Goods')->upload($img, 'goods_img', GOODS_IMG);
        }
        //是否修改商品相册  (全删除了，在重新添加)
        if($request->file('img')){
            $tu = $request->file('img');
            $img = [];
            foreach ($tu as $k=>$v){
                $info = [];
                $name      = $v->getClientOriginalName();//得到图片名；
                $ext       = $v->getClientOriginalExtension();//得到图片后缀；
                $file_name = md5(uniqid($name)) . '.' . $ext;//生成新的的文件名
                $date      = date('Y-m-d');
                $dir_path = GOODS_IMG;
                $file_relative_path = $dir_path.'/'.$date;
                $file_path = public_path($file_relative_path);
                if (!is_dir($file_path)){
                    try {
                        mkdir($file_path);
                    } catch (\Exception $e) {
                        throw new \Exception("请创建该目录~");
                    }
                }
                $v->move($file_path,$date . '/' . $file_name);
                $info['img'] = $date . '/' . $file_name;
                $info['goods_id'] = $id;
                $img[] = $info;
            }
            //先将没有修改之前的原数据拿到
            $tupian = GoodsPhotoModel::where('goods_id',$id)->get();
            //删除商品相册原数据
            GoodsPhotoModel::where('goods_id',$id)->delete();
            //添加商品相册数据库
            $photo = GoodsPhotoModel::insert($img);
            if($photo){
                //成功就删除原图片
                foreach ($tupian as $k=>$v){
                    @unlink( GOODS_IMG . '/' .$v->img);
                }
            }
        }
        //修改商品主表的数据
        try{
            $res =GoodsModel::where('id',$id)->update($res);
            if(isset($delete)){
                @unlink($delete);
            }
//            dump($res);  // 1表示修改  0表示未修改
            if($res){
                return redirect(url('/admin/goods'))->with('success','修改成功');
            }else{
                return redirect(url('/admin/goods'));
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
        try{
            $delete = GoodsModel::where('id',$id)->update(['goods_hs'=>1]);
            if($delete){
                //跳转到商品回收页面  暂时跳到主页面
                return redirect(url('/admin/hs'))->with('success','商品移至回收站~');
            }
        }catch (Exception $e){
            return back()->with('error','商品删除失败');
        }
    }


}
