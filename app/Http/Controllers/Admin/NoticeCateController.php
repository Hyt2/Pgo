<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\NoticeCateModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class NoticeCateController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //分组查询
        $res = NoticeCateModel::select(DB::raw('*,concat(path,id) as paths'))->orderBy('paths')->paginate($request->input('num',15));
//        dump($res);
        foreach ($res as $k=>$v){
            //path  0,1,4
            $num = substr_count($v->path,',')-1;
            $v->cate_name = str_repeat('&nbsp;', $num * 8).'|--'.$v->cate_name;
        }

        return view('admin.notice_cate.index',['title'=>'公告栏目','title2'=>'浏览栏目','res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //select *,concat(path,id) as paths from notice_cate order by paths
        //分组查询
        $res = NoticeCateModel::select(DB::raw('*,concat(path,id) as paths'))->orderBy('paths')->get();
//        dump($res);
        foreach ($res as $k=>$v){
            //path  0,1,4
            $num = substr_count($v->path,',')-1;
            $v->cate_name = str_repeat('&nbsp;', $num * 8).'|--'.$v->cate_name;
        }
        return view('admin.notice_cate.add',['title'=>'公告栏目','title2'=>'添加栏目','res'=>$res]);
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
        //表单验证
        $this->validate($request,[
            'cate_name' => 'regex:/^.{6,30}$/'
        ],[
            'cate_name.regex' => '栏目名称位数控制在2-8个字符之间'
        ]);
        //获取数据
        if($res['cid'] == '0'){
            //表示添加顶级分类
            $res['path'] = '0,';
        }else{
            //子类分类
            $data = NoticeCateModel::where('id',$res['cid'])->first();
            $res['path'] = $data->path.$data->id.',';
        }
        //添加到数据库
        $res['create_time'] = time();
//        dump($res);
        try{
           $info = NoticeCateModel::insert($res);
           if($info){
               return redirect(url('/admin/notice_cate'))->with('success','添加成功');
           }
        }catch(Exception $e){
            return back()->with('error','添加失败');
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

        $res = NoticeCateModel::find($id);
        //分组查询
        $select = NoticeCateModel::select(DB::raw('*,concat(path,id) as paths'))->orderBy('paths')->get();
        foreach ($select as $k=>$v){
            //path  0,1,4
            $num = substr_count($v->path,',')-1;
            $v->cate_name = str_repeat('&nbsp;', $num * 8).'|--'.$v->cate_name;
        }
        return view('admin.notice_cate.edit',['title'=>'公告栏目','title2'=>'修改栏目','res'=>$res,'select'=>$select]);
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
        //表单验证
        $this->validate($request,[
            'cate_name' => 'regex:/^.{6,30}$/'
        ],[
            'cate_name.regex' => '栏目名称位数控制在2-8个字符之间'
        ]);
       //修改数据库
        try{
            $data = NoticeCateModel::where('id',$id)->update($res);
//            dd($data);  //0表示未修改 1表示修改
            if($data){
                return redirect(url('/admin/notice_cate'))->with('success','修改成功');
            }else{
                return redirect(url('/admin/notice_cate'));
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
        //判断要删除的类别是否有子类
        $where[] = ['cid','=',$id];
        $new = NoticeCateModel::where($where)->first();
        if(empty($new)){
            //为空表示没有子分类
            /*判断分类下是否有商品
             * */
            //删除
            try{
                $res = NoticeCateModel::where('id',$id)->delete();
                if($res){
                    return redirect(url('/admin/notice_cate'))->with('success','删除成功');
                }
            }catch(Exception $e){
                return back()->with('error','删除失败');
            }
        }else{
            //不为空表示有子分类
            return back()->with('error','要删除的分类下有子分类~');
        }
    }
}
