<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\RoleModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Exception;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = RoleModel::paginate(10);
        return view('admin.role.index',['title'=>'RBAC管理','title2'=>'角色管理 / 浏览角色','res'=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.add',['title'=>'RBAC管理','title2'=>'角色管理 / 添加角色']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = $request->except('_token');
        $this->validate($request,[
            'role_name' => 'required',
        ],[
            'role.required' => '角色不能为空'
        ]);
        //添加到数据库
        try{
            $rs =RoleModel::create($role);

            if($rs){
                return redirect(url('/admin/role'))->with('success','角色添加成功');
            }
        }catch(Exception $e){
            return back()->with('error','角色添加失败');
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
        $role = RoleModel::find($id);
        return view('admin.role.edit',['title'=>'RBAC管理','title2'=>'角色管理 / 修改角色','res'=>$role]);
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
        $role = $request->except('_token','_method');
        $this->validate($request,[
            'role_name' => 'required',
        ],[
            'role.required' => '角色不能为空'
        ]);
        try{
            $rs =RoleModel::where('id',$id)->update($role);

            //            dump($res);  // 1表示修改  0表示未修改
            if($rs){
                return redirect(url('/admin/role'))->with('success','修改成功');
            }else{
                return redirect(url('/admin/role'));
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
            $rs =RoleModel::where('id',$id)->delete();

            if($rs){
                return redirect(url('/admin/role'))->with('success','角色删除成功');
            }
        }catch(Exception $e){
            return back()->with('error','角色删除失败');
        }
    }
}
