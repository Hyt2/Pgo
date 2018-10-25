<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use Input;
class UserController extends CommonController
{
    //获取用户信息
    public function userinfo()
    {
        if(session('status')=='down'){
            return msg('该用户已被禁用','/');
        } 
        //获取用户信息
        $userInfo=session('UserInfo');
        // return $uanme; 
        return view('home.user.userinfo');
    }
    //修改头像
    public function uploads(Request $req)
    {
        //获取上传的文件对象
        // return $file = Input::file('pic');
        $file = $req->file('uface');
        //判断文件是否有效
        try{
            if($file){
                $entension = $file->getClientOriginalExtension();//上传文件的后缀名
                $newName   = date('YmdHis').mt_rand(1000,9999).'.'.$entension;
                $path      = $file->move(_UPLOADS_.'/userFile',$newName);
                // 生成图片路径
                $filepath  = _UPLOADS_.'/userFile/'.$newName;
                //把数据录入数据库
                $data['uface']=$filepath;

                //执行修改
                $rs = model('User')->where('uname',session('UserInfo')['uname'])->update($data);
                // 更新session数据
                session(["uface"=>$filepath]);
                //返回文件的路径
                
                @unlink(session('UserInfo')['uface']);
                if($rs)
                    session('UserInfo')['uface'] = $data['uface'];
                    return  ['msg'=>'修改成功','src'=>$filepath,'status'=>'1'];
                
            }
        }catch(\Exception $e){
            return  ['msg'=>'修改失败','src'=>$filepath,'status'=>'0'];
        }
        
    }

    //个人中心修改数据
    public function updateinfo(Request $req)
    {
        //获取修改数据
        $data = $req->all();
        try{
            // $rs=model('User')->where('uid',)->update($data);
            $user = model('User')->find(session('UserInfo')['uid']);

            //核查用户名重复
            $rs=model('User')->where('uname',$data['uname'])->where('uid','!=',session('UserInfo')['uid'])->count();
            if($rs) return ['status'=>'2','msg'=>'该用户名已存在'];
            $user->uname = $data['uname'];
            $user->sex   = $data['sex'];
            $user->pone  = $data['pone'];
            $user->save();

            //更新session数据
            session(['UserInfo'=>$user]);
            return ['status'=>'1','msg'=>'修改成功'];
        }catch(\Exception $e){
            // return $e->getMessage();
            return ['status'=>'0','msg'=>'修改失败'];
        }
    }

    //重置密码页面
    public function forget()
    {
        return view('home.user.forget');
    }
}
