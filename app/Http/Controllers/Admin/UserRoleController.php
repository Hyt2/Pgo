<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\AdminModel;
use App\Http\Model\Admin\RoleModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserRoleController extends Controller
{
    //
    public function index($id){
        $user_role = AdminModel::find($id);
        $role = RoleModel::orderBy('id','asc')->get();
//        $res = DB::table('user_role')->where('user_id',$id)->pluck('role_id')->toArray();
        $user = $user_role->roles;
        $res = [];
        foreach ($user as $k=>$v){
            $res[] = $v->id;
        }

        return view('admin.user_role.index',['title'=>'RBAC管理','title2'=>'用户权限','user_role'=>$user_role,'role'=>$role,'res'=>$res]);
    }

    /**
     * 操作权限添加
     */
    public function do_user_role(Request $request){
       $user_id = $request->input('id');
       $role_id = $request->input('role_id');
       if(!$role_id){
           return back()->with('error','请选择角色');
       }
       //添加数据 $role_id
        //先删除
        DB::table('user_role')->where('user_id',$user_id)->delete();

       $arr = [];
       foreach ($role_id as $k=>$v){
           $res = [];
           $res['user_id'] = $user_id;
           $res['role_id'] = $v;
           $arr[] = $res;
       }
       $data = DB::table('user_role')->insert($arr);
       if($data){
           return redirect(url('admin/admin'))->with('success','添加成功');
       }else{
           return back()->with('error','添加失败');
       }
    }
}
