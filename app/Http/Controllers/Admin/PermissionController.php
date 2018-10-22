<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\PermissionModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Exception;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = PermissionModel::orderBy('id','asc')->paginate(10);
        return view('admin.permission.index',['title'=>'RBAC管理','title2'=>'权限管理 / 浏览权限','res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.add',['title'=>'RBAC管理','title2'=>'权限管理 / 添加权限']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $per = $request->except('_token');
        $this->validate($request,[
            'per_name' => 'required',
//            'per_url' => 'required|regex:/^\/[\/\w]+$/',
        ],[
            'per_name.required' => '权限名称不能为空',
            'per_url.required' => '权限地址不能为空',
//            'per_url.regex' => '请参照例子格式，填写权限地址',
        ]);
        //添加到数据库
        try{
            $rs =PermissionModel::create($per);

            if($rs){
                return redirect(url('/admin/permission'))->with('success','权限添加成功');
            }
        }catch(Exception $e){
            return back()->with('error','权限添加失败');
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
        $per = PermissionModel::find($id);
        return view('admin.permission.edit',['title'=>'RBAC管理','title2'=>'权限管理 / 修改权限','res'=>$per]);
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
        $per = $request->except('_token','_method');
        $this->validate($request,[
            'per_name' => 'required',
            'per_url' => 'required',
        ],[
            'per_name.required' => '权限名称不能为空',
            'per_url.required' => '权限地址不能为空',
        ]);
        try{
            $rs = PermissionModel::where('id',$id)->update($per);

            //            dump($res);  // 1表示修改  0表示未修改
            if($rs){
                return redirect(url('/admin/permission'))->with('success','修改成功');
            }else{
                return redirect(url('/admin/permission'));
            }
        }catch (Exception $r){
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
        //暂时直接删除，为判断链表
        try{
            $rs =PermissionModel::where('id',$id)->delete();

            if($rs){
                return redirect(url('/admin/permission'))->with('success','角色删除成功');
            }
        }catch(Exception $e){
            return back()->with('error','角色删除失败');
        }
    }
}
