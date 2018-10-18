<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\NoticeCateModel;
use App\Http\Model\Admin\NoticeModel;
use App\Http\Requests\NoticeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;


class NoticeController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //多添加查询
        $res = NoticeModel::orderBy('id','asc')->where(function($query) use($request){
            //检测 与判断
            $title = $request->input('title');
            $notice_name = $request->input('notice_name');
            if(!empty($title)){
                $query->where('title','like','%'.$title.'%');
            }
            if(!empty($notice_name)){
                $query->where('notice_name','like','%'.$notice_name.'%');
            }
        })->paginate($request->input('num',10));
        return view('admin.notice.index',['title'=>'商城公共','title2'=>'浏览文章','res' => $res,'request'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //分组查询
        $res = NoticeCateModel::select(DB::raw('*,concat(path,id) as paths'))->orderBy('paths')->get();
        foreach ($res as $k=>$v){
            //path  0,1,4
            $num = substr_count($v->path,',')-1;
            $v->cate_name = str_repeat('&nbsp;', $num * 8).'|--'.$v->cate_name;
        }
        return view('admin.notice.add',['title'=> '商城公告','title2' => '添加文章','res'=>$res]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoticeRequest $request)
    {
        $re = $request->except('_token','img');

        //对为空字段进行判读验证
        if(!empty($re['keyword'])){
            $this->validate($request,[
                'keyword' => 'regex:/^.{2,30}$/'
            ],[
                'keyword.regex' => '公告关键字长度不符合'
            ]);
        }
        if(!empty($re['description'])){
            $this->validate($request,[
                'description' => 'regex:/^.{2,60}$/',
            ],[
                'description.regex' => '公告描述长度不符合',
            ]);
        }
        //判读是否上传缩率图
        if($img = $request->file('img')) {
            $re['img'] = model('Notice')->upload($img, 'img', NOTICE_IMG);
        }
        //整理创建时间
        $re['create_time'] =time();
        //添加到数据库
        try{
            $rs =NoticeModel::insert($re);

            if($rs){
                return redirect(url('/admin/notice'))->with('success','添加公告成功');
            }
        }catch(Exception $e){
            return back()->with('error','添加公告失败');
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

        $res = NoticeModel::find($id);
        //分组查询
        $cate = NoticeCateModel::select(DB::raw('*,concat(path,id) as paths'))->orderBy('paths')->get();
        foreach ($cate as $k=>$v){
            //path  0,1,4
            $num = substr_count($v->path,',')-1;
            $v->cate_name = str_repeat('&nbsp;', $num * 8).'|--'.$v->cate_name;
        }

        return view('admin.notice.edit',['title'=>'商品公告','title2'=>'修改公告','res'=>$res,'select'=>$cate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NoticeRequest $request, $id)
    {
        //表单验证
        $re = $request->except('_token','_method','img');
        //对为空字段进行判读验证
        if(!empty($re['keyword'])){
            $this->validate($request,[
                'keyword' => 'regex:/^.{2,30}$/'
            ],[
                'keyword.regex' => '公告关键字长度不符合'
            ]);
        }
        if(!empty($re['description'])){
            $this->validate($request,[
                'description' => 'regex:/^.{2,60}$/',
            ],[
                'description.regex' => '公告描述长度不符合',
            ]);
        }
        //处理上传图片
        if($img = $request->file('img')) {
            $src = NOTICE_IMG . '/' . NoticeModel::find($id)->img;
            $re['img'] = model('Notice')->upload($img, 'img', NOTICE_IMG);
        }

//        dd($re);
        try{
            $res =NoticeModel::where('id',$id)->update($re);
            @unlink($src);
//            dump($res);  // 1表示修改  0表示未修改
            if($res){
                return redirect(url('/admin/notice'))->with('success','修改成功');
            }else{
                return redirect(url('/admin/notice'));
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
            $src = NOTICE_IMG . '/' . NoticeModel::find($id)->img;
            $res = NoticeModel::where('id',$id)->delete();
            if($res){
                @unlink($src);
               return redirect(url('/admin/notice'))->with('success','删除成功');
            }
        }catch(Exception $e){
            return back()->with('error','删除失败');
        }
    }
}
