<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\AdModel;
class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $data=AdModel::where(function($query) use ($req){
            $query->where('ad_name','like','%'.$req->keyword.'%');
            $query->orWhere('title','like','%'.$req->keyword.'%');
        })->orderBy('sort')->paginate(5);

        // dd($req -> all()) ;
        return view('admin.ad.index',['data'=>$data,'req'=>$req]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.ad.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $data=$req->except('_token');
        // dd($data['src']);
        //存储模型对象
        $ad=model('Ad');
        //判断是否有上传图片
        if(!empty($data['src'])){

            $data['src']=$ad->upload($data['src'],'src',_AD_);
        }
        if (!$ad->insert($data)) {
            return msg('轮播图添加失败, 请稍后再试!');
        }

        return msg('轮播图添加成功!', 'admin/ad');
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
        return view('admin.ad.edit',['data'=>ADModel::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        //修改数据
        $data=$req->except('_token','_method');
        $ad=model('Ad');
        //判断是否有图片上传
        if(!empty($data['src'])){
            $data['src']=$ad->upload($data['src'],'src',_AD_);
        }
        if($ad->where('id',$id)->update($data)!==0){
            return msg('修改成功!','/admin/ad');
        }
         return msg('修改失败,请稍后再试!','/admin/ad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = model('Ad');
        $old_img = u(_AD_) . $model->find($id)->img;
        if (file_exists($old_img)) {
            @unlink($old_img);
        }

        if ($model->destroy($id)) {
            $data = ['status' => 0, 'msg' => '删除成功!'];
        } else {
            $data = ['status' => 1, 'msg' => '删除失败,请稍候再试!'];
        }
        return $data;
    }
}
