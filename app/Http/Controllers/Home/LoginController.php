<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // echo '这是前台登陆页面';die;
        return view('home.login.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
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
    }

    //校验验证码及登陆数据
    public function checkCode(Request $req)
    {
        if(!captcha_check($req->input('code'))){
            return ['status'=>'0','msg'=>"验证码有误"];
        }
        $data=$req->except('_token','code');
        try{
            $rs=model('User')->where('uname',$data['uname'])->orWhere('uemail',$data['uname'])->first();
        }catch(\Exception $e){
            return $e->getMessage();
        }

        
        if($rs){
            if (Hash::check($data['upwd'],$rs->upwd)) {
                if($rs->status=='up'){
                    //从用户数据中删除密码
                    unset($rs->upwd);
                    //存储用户信息
                    session(['UserInfo'=>$rs]);

                    //设置默认头像
                    if(empty($rs->uface)){
                        session(['uface'=>'/static/home/images/0000000000_01_120x120.jpg']);
                    }else{
                        //储存头像
                        session(['uface'=>$rs->uface]);
                    }
                    //添加登陆时间
                    $time['last_time']=time();
                    model('User')->where('uid',$rs->uid)->update($time);
                    return ['status'=>'1','msg'=>"登陆成功"];
                }
                return ['status'=>'3','msg'=>"该用户已处于禁用状态,请联系管理员解除禁用"];
            }
            
        }
        return ['status'=>'2','msg'=>"用户名或密码错误"];
    }

    //退出
    public function logout()
    {
        session(['UserInfo'=>null]);
        return msg('退出成功!','/');
    }


    //重置密码中的检查用户是否存在
    public function exists(Request $req)
    {
        if(!captcha_check($req->input('code'))){
            return ['status'=>'2','msg'=>"验证码有误"];
        }
        $data=$req->all();
        try{
             return $rs=model('User')->where('uname',$data['uname'])->orWhere('uemail',$data['uname'])->count();
            if($rs<1){
            return ['status'=>'0','msg'=>"该用户不存在"];
        }
            return ['status'=>'1','msg'=>'用户存在'];
        }catch(\Exception $e){
            return $e->getMessage();
        }
        
    }
}
