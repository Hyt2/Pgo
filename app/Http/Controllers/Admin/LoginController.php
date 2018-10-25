<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use DB;
use Config;
use App\Http\Model\Admin\AdminModel;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admin.login.login');
    } 

    public function dologin(Request $request)
    {
    	//表单验证
    	$res=$request->except('_token');
    	//验证验证码
    	$code = session('code');


    	if($code != $request->code)
    	{
    		return back()->with('error','&nbsp;验证码错误，请重新输入！');
    	}

    	//验证用户名
    	$name=DB::table('admin')->where('name',$request->name)->first();
    	if(!$name){
    		return back()->with('error',' &nbsp;用户名或密码错误，请重新输入！');
    	}
    	//验证密码md
    	$pwd=DB::table('admin')->where('pwd',md5($request->pwd))->first();
    	
    	if(!$pwd)
    	{
    		return back()->with('error','&nbsp;用户名或密码错误，请重新输入！');
    	}


        if($pwd->status == '2')
        {
            return back()->with('error','&nbsp;该管理员处于禁用状态！');
        }


    	//存储用户idsession(['id'=>$name->id]);
    	session(['id'=>$name->id]);


        model('Admin')->where('id', '=', session('id'))->update(['last_time' => time()]);

    	//提示信息
    	return redirect('/admin/index');

    }

    public function captcha()
    {
        $phrase = new PhraseBuilder;
        // 设置验证码位数
        $code = $phrase->build(4);
        // 生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder($code, $phrase);
        // 设置背景颜色
        $builder->setBackgroundColor(123, 203, 230);
        $builder->setMaxAngle(25);
        $builder->setMaxBehindLines(0);
        $builder->setMaxFrontLines(0);
        // 可以设置图片宽高及字体
        $builder->build($width = 85, $height = 34, $font = null);
        // 获取验证码的内容
        $phrase = $builder->getPhrase();
        // 把内容存入session
        session(['code' => $phrase]);
        // 生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header("Content-Type:image/jpeg");
        $builder->output();
        /*die;*/
    }

    //后台管理员头像
    public function profile()
    {
    	$rs =DB::table('admin')->where('id',session('id'))->first();
    	// dd($rs);
    	return view('admin.login.profile',[
            'title'=>'修改头像信息',
            'rs'=>$rs
    	]);
    }

    //修改头像
    public function doprofile(Request $request)
    {
    	//获取上传的文件对象  $_FILES
        $file = $request->file('img');
        //判断文件是否有效
        if($file){

        	$res['img']=(new AdminModel)->upload($file,'img',ADMIN_IMG);
        	// return $res;
            AdminModel::where('id',session('id'))->update($res);
            //返回文件的路径
            return  _ADMIN_IMG.'/'.$res['img'];
        }

       /* return redirect('/admin/index')->with('success','头像修改成功！');*/
    }

    public function pass()
    {
        return view('admin.login.pass',['title'=>'修改密码']);
    }

    public function dopass(Request $request)
    {
        //表单验证

        $res = $request->except('_token');
        if ($res['pwd'] != $res['repwd']) {
            return back()->with('error',' &nbsp;两次密码不一致！');
        }

        //获取数据库密码
        $pwd=DB::table('admin')->where('id',session('id'))->first()->pwd;
        //获取旧密码
        $oldpass = $request->oldpass;
        if($pwd != md5($oldpass))
        {
            return back()->with('error','原密码错误！');
        }

        $data['pwd'] = md5($request->pwd);
       
        try{
           
             $data = AdminModel::where('id',session('id'))->update($data);
        
            if($data){

                return redirect('/admin/login')->with('success','修改成功');
            }
        }catch(\Exception $e){

            return back()->with('error','修改密码失败');
        }

    }


    public function logout()
    {
        //清空session uid
        session(['id'=>'']);

        return redirect('/admin/login');
    } 
}
