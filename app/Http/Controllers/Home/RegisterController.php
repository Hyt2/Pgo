<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CommonController;
use Mail;
use Hash;
class RegisterController extends CommonController
{	
	public $model='User';
    //
    public function register()
    {
    	$data=model($this->model)->find(1);
    	return view('home.register.register');
    }

    public function regCheck(Request $req)
    {
    	// $uname=$req->input('uname');
    	$uname=$req->only('uname');
    	$data=model($this->model)->where($uname)->count();
    	return $data;
    }

    public function goemail(Request $req)
    {
    	$data=$req->all();
    	$data['token']=str_random(60);
        $re=model($this->model)->get()->pluck('uemail')->toArray();

    	if(in_array($data['uemail'],$re)) return ['status'=>'2','msg'=>'该邮箱已注册,请直接登陆'];
        $code=mt_rand(1000,9999);
        $req->session()->keep(['uname','uemail']);
        session(['uemails' => $data['uemail']]);
        session(['unames'  => $data['uname']]);
        session(['code'    => $code]);
        session(['token'   => $data['token']]);
        try{
            Mail::send('home.email.reg', ['id'=>'5','data'=>$data,'code'=>$code], function ($msg) use ($data){
                //从哪发的邮件
                $msg->from(env('MAIL_USERNAME'), 'Pgo商城');
                //发给谁的
                $msg->to($data['uemail'], $data['uname'])->subject('注册商城提醒');
            });
            return ['status'=>'1','msg'=>'发送成功,请等待验证消息','code'=>$code,'check'=>session('code')];
        }catch(\Exception $e){
            // return $e->getMessage();查看错误
            return ['status'=>'0','msg'=>'发送失败,邮箱不存在或已被注销'];
        }
		

	    
    }

    public function checkcode(Request $req)
    {

        $data=$req->except('code');
        $checkcode=$req->input('code');
        $code=session('code');
        if($checkcode==$code){
            //注册时间
            $data['create_time']=time();
            // 激活状态
            $data['activate']='1';
            //用户状态
            $data['status']='up';
            //token
            $data['token']=session('token');

            //密码加密
            $data['upwd']=Hash::make($data['upwd']);
            
            if(session('unames')!=$data['uname'] || session('uemails')!=$data['uemail']){
                return ['msg'=>'用户名或邮箱错误','status'=>'3','code'=>$code,'check'=>$checkcode];
            };

            try{
                $rs=model($this->model)->insert($data);
                //清除session
                
                return ['msg'=>'注册成功','status'=>'1','code'=>$code,'check'=>$checkcode];
            }catch(\Exception $e){
                return ['msg'=>'注册失败','status'=>'0'];
                // return $e->getMessage();
            }
        }
        return ['msg'=>'验证码错误','status'=>3,'code'=>$code,'check'=>$checkcode];
    }

    public function regsuccess()
    {
        $email=session('uemails');
        session(['unames'=>null]);
        session(['uemails'=>null]);
        return view('home.register.reg_success',['email'=>$email]);
    }
}
