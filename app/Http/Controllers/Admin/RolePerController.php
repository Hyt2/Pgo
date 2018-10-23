<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Admin\PermissionModel;
use App\Http\Model\Admin\RoleModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RolePerController extends Controller
{
    public function index($id){
        $role_per = RoleModel::find($id);
        $per = PermissionModel::orderBy('id','asc')->get();
//        $res = DB::table('role_permission')->where('role_id',$id)->pluck('per_id')->toArray();
        $permission = $role_per->permissions;
        $res = [];
        foreach ($permission as $k=>$v){
            $res[] = $v->id;
        }
        return view('admin.role_permission.index',['title'=>'RBAC管理','title2'=>'用户权限','role_per'=>$role_per,'per'=>$per,'res'=>$res]);
    }
    public function do_role_per(Request $request){
//        dd($request->input());
        $role_id = $request->input('id');
        $per_id = $request->input('per_id');
        if(!$per_id){
            return back()->with('error','请选择角色');
        }

        //先删除
        DB::table('role_permission')->where('role_id',$role_id)->delete();

        $arr = [];
        foreach ($per_id as $k=>$v){
            $res = [];
            $res['role_id'] = $role_id;
            $res['per_id'] = $v;
            $arr[] = $res;
        }
//        dd($arr);
        $data = DB::table('role_permission')->insert($arr);
        if($data){
            return redirect(url('admin/role'))->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }
}
