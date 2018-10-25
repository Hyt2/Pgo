<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Admin\CateModel;

use DB;

class CateController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        //
        // $data=CateModel::raw('*,concat(path,id) as paths')->paginate(2);
        //获取搜索关键字
        

        //连接id和path并排序以及分页
        $data = CateModel::select(DB::raw("*,concat(path,id) as paths"))->
            orderBy('paths')->where(function($query) use($req) {
                   $keyword=$req->input('keyword');
                   $query->where('cate_name','like','%'.$keyword.'%');
                    $cate=$req->input('cate');
                    $cates = CateModel::where('pid',0)->get();
                     if(!empty($cate)){
                        $query->where('path','like','%'.$cate.'%')->orWhere('id',$cate);
                     }
            })->paginate(10);
        $cates = CateModel::where('pid',0)->get();    
        foreach($data as $k=>$v) {
            $n = substr_count($v->paths,',')-1;
            $v->cate_name = str_repeat('&nbsp;', $n*8).'|--'.$v->cate_name;
        }

        return view('admin.cate.index',['title'=>'浏览类别','data'=>$data,'req'=>$req,'cates'=>$cates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        //查出父类名称和id
        $cate = CateModel::select(DB::raw("id,cate_name,concat(path,id) as paths"))->
            orderBy('paths')->get();
        foreach($cate as $k=>$v){
            $n=substr_count($v->paths,',')-1;
            $v->cate_name = str_repeat('&nbsp;', $n*8).'|--'.$v->cate_name;
        }

        return view('admin.cate.add',['title'=>'添加类别','cate'=>$cate,'id'=>$req->input('id')]);
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
        // print_r($data);die;
        // return $data;
        //
        $data['create_time']=time();
        
        if($data['pid'] == '0'){

            $data['path'] = '0,';
        } else{

            $rs = CateModel::where('id',$data['pid'])->first();
            $data['path'] = $rs->path.$rs->id.',';
        }

        try{
             CateModel::insert($data);
             return msg('添加商品分类成功!', 'admin/goods_cate');
        }catch(\Exception $e){
             return msg('添加商品分类失败!');
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
        $data=CateModel::find($id);
        if(!$data->pid=='0'){
            $cate = CateModel::select(DB::raw("id,cate_name,concat(path,id) as paths"))->
                orderBy('paths')->get();
            foreach($cate as $k=>$v){
                $n=substr_count($v->paths,',')-1;
                $v->cate_name = str_repeat('&nbsp;', $n*8).'|--'.$v->cate_name;
            }
        }else{
            $cate='';
        }
        return view('admin.cate.edit',['title'=>'分类修改','cate'=>$cate,'data'=>$data]);
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
        $data=$req->except('_token', '_method');
        
        try{
            CateModel::where('id',$id)->update($data);
            return msg('修改商品分类成功!', 'admin/goods_cate');
        }catch(\Exception $e){
            return msg('修改商品分类失败!');
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
        //
        $child = CateModel::where('pid', $id)->first();
        if ($child) return ['status' => 1, 'msg' => '该分类下有子类不能删除!'];
            

        if (CateModel::destroy($id)) {
            $data = ['status' => 0, 'msg' => '删除商品分类成功!'];
        } else {
            $data = ['status' => 1, 'msg' => '删除商品分类失败!'];
        }
        return $data;
        // $pids=CateModel::pluck('pid');
        // foreach ($pids as $k => $v) {
        //     if($id==$v) return '2';
        // }
        // try{
        //     CateModel::destroy($id);
        //     return '1';
        // }catch(\Exception $e){
        //     return '0';
        // }
    }
}
